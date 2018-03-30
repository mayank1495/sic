<?php


function find_all_students() {
    global $db;

    $query="SELECT * FROM stu";
    $result=mysqli_query($db,$query);
    confirm_result_set($result);
    return $result;
}

function find_user_by_id($id,$user="") {
    global $db;

    if($user=="student") {
        $query="SELECT * FROM stu WHERE id='";
    }else {
        $query="SELECT * FROM admins WHERE id='";
    }

    $query.=$id."'";
    $result=mysqli_query($db,$query);
    confirm_result_set($result);
    $usr=mysqli_fetch_assoc($result);
    return $usr;
}

// function find_student_by_email($email) {
//     global $db;

//     $query="SELECT * FROM stu where email='";
//     $query.=$email;
//     $query.="'" ;

//     $result = mysqli_query($db,$query);
//     confirm_result_set($result);
//     $std = mysqli_fetch_assoc($result);
//     return $std;
// }

function has_access($user) {
    
    if($user['access']==1) {
        return true;
    } else {
        return false;
    }
}

function update_access($id,$access) {
    global $db;

    $access=$access==0?1:0;
    $query="UPDATE stu SET access='".$access."' ";
    $query.="WHERE id='".$id."'";
    // echo $query;
    $result=mysqli_query($db,$query);
}

function find_user_by_email($email,$user="") {
    global $db;

    if($user=="student"){
        $query="SELECT * FROM stu where email='";
    } else {
        $query="SELECT * FROM admins where email='";
    }
    
    $query.=$email;
    $query.="'" ;

    $result = mysqli_query($db,$query);
    confirm_result_set($result);
    $usr = mysqli_fetch_assoc($result);
    return $usr;
}


function get_fields_and_values() {
    
    $fields="(";
    $values="(";

    foreach($_POST as $key=>$value)
    {
        if($key!="submit" && $key!="email" && $key!="emaildom"){
        if($key=="pwd")
        {
            $value=password_hash($value,PASSWORD_BCRYPT);
        }
        $fields.=$key.",";
        $values.="'".$value."'".",";
        }
        if($key=="emaildom")
        {
            $key="email";
            $value=$_POST[$key].$value;
            $fields.=$key.",";
            $values.="'".$value."'".",";
        }
    }

    $fields=rtrim($fields,", ");
    $fields.=")";
    $values=rtrim($values,", ");
    $values.=")";

    $data = array('fields'=>$fields,'values'=>$values);
    return $data;
}


function insert_into_stu($data) {
    global $db;

    $query="INSERT INTO stu ";
    $query.=$data['fields'];
    $query.=" VALUES";
    $query.=$data['values'];
    
    $result=mysqli_query($db,$query);
    if(!$result) {
        die('Query FAILED' . mysqli_error($db));
    } else {
    // echo "Record Created";
    }
}

function get_pwd($id,$user) {
    global $db;

    if($user=="student") {
        $query="SELECT pwd FROM stu WHERE id='";
    }else {
        $query="SELECT pwd FROM admins WHERE id='";
    }
    $query.=$id."'";
    $result=mysqli_query($db,$query);
    confirm_result_set($result);
    $usr=mysqli_fetch_assoc($result);
    return $usr['pwd'];
}

function change_pwd($pwd,$id,$user) {
    global $db;

    $pwd=password_hash($pwd,PASSWORD_BCRYPT);
    if($user=="student") {
        $query="UPDATE stu SET pwd='";
    }else {
        $query="UPDATE admins SET pwd='";
    }
    $query.=$pwd."' ";
    $query.="WHERE id='";
    $query.=$id."'";
    $result=mysqli_query($db,$query);
}
