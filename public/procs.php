<?php require_once('../private/initialize.php'); ?>

<?php
echo "HELLOO";
if(is_post_request())
{
    $query_names="(";
    $query_values="(";
    
    $em_query="SELECT * FROM stu where email='".$_POST['email'].$_POST['emaildom']."'" ;
    // echo $em_query;
    $em_res=mysqli_query($db,$em_query);
    // print_r($em_res);
    if($em_res)
    {
        echo "User already exists.";
    }
    else
    {
    foreach($_POST as $key=>$value)
    {
        if($key!="submit" && $key!="email" && $key!="emaildom"){
        if($key=="pwd")
        {
            $value=password_hash($value,PASSWORD_BCRYPT);
        }
        $query_names.=$key.",";
        $query_values.="'".$value."'".",";
        }
        if($key=="emaildom")
        {
            $key="email";
            $value=$_POST[$key].$value;
            $query_names.=$key.",";
            $query_values.="'".$value."'".",";
        }
    }

    $query_names=rtrim($query_names,", ");
    $query_names.=")";
    $query_values=rtrim($query_values,", ");
    $query_values.=")";
    // echo $query_names; echo nl2br("\n");
    // echo $query_values;
    $query="INSERT INTO stu ".$query_names." VALUES".$query_values;
    // echo $query;
    $res=mysqli_query($db,$query);
    if(!$res) {
        // echo "erroor";
        die('Query FAILED' . mysqli_error($db));
    } else {
    echo "Record Created"; 
    }
}
}



?>