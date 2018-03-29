<?php


function check_if_student_exists() {
    global $db;

    $query="SELECT * FROM stu where email='";
    $query.=$_POST['email'].$_POST['emaildom'];
    $query.="'" ;

    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)!=0) {
        return true;
        // redirect_to(url_for('/signup.php?err=1'));
    }
    return false;

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
    echo "Record Created";
    }
}

