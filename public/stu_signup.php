<?php require_once('../private/initialize.php'); ?>

<?php
// echo "HELLOO";
// $errors=[];
if(is_post_request())
{
    $std=check_if_student_exists();
    if(!$std) {
        $data=get_fields_and_values();
        insert_into_stu($data);
    }
    // $query_fields="(";
    // $query_values="(";

    // foreach($_POST as $key=>$value)
    // {
    //     if($key!="submit" && $key!="email" && $key!="emaildom"){
    //     if($key=="pwd")
    //     {
    //         $value=password_hash($value,PASSWORD_BCRYPT);
    //     }
    //     $query_fields.=$key.",";
    //     $query_values.="'".$value."'".",";
    //     }
    //     if($key=="emaildom")
    //     {
    //         $key="email";
    //         $value=$_POST[$key].$value;
    //         $query_fields.=$key.",";
    //         $query_values.="'".$value."'".",";
    //     }
    // }

    // $query_fields=rtrim($query_fields,", ");
    // $query_fields.=")";
    // $query_values=rtrim($query_values,", ");
    // $query_values.=")";
    // echo $query_fields; echo nl2br("\n");
    // echo $query_values;
    // // $query="INSERT INTO stu ".$query_fields." VALUES".$query_values;
    // $query="INSERT INTO stu ".$data['fields']." VALUES".$data['values'];
    // // echo $query;
    // $res=mysqli_query($db,$query);
    // if(!$res) {
    //     // echo "erroor";
    //     die('Query FAILED' . mysqli_error($db));
    // } else {
    // echo "Record Created"; 
    }
    // }
    // else
    // {
    //     echo "User already exists.";
    //     // echo display_errors($errors);
    //     // redirect_to(url_for('/signup.php?err=1'));
    // }



?>