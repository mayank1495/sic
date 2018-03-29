<?php require_once('../private/initialize.php'); ?>

<?php
// echo "HELLOO";
// $errors=[];
if(is_post_request())
{
    $query_names="(";
    $query_values="(";
    
    $em_query="SELECT * FROM stu where email='".$_POST['email'].$_POST['emaildom']."'" ;
    // echo $em_query;
    $em_res=mysqli_query($db,$em_query);
    // $rr=mysqli_fetch_assoc($em_res);
    // print_r($em_res);
    $err_msg="User already exists.";
    // if($em_res->num_rows>0)
    // echo "num:";
    // echo mysqli_num_rows($em_res)==0;
    if(mysqli_num_rows($em_res)!=0)
    {
        // echo "User already exists.";
        // echo display_errors($errors);
        redirect_to(url_for('/signup.php?err=1'));
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
    // else
    // {
    //     echo "User already exists.";
    //     // echo display_errors($errors);
    //     // redirect_to(url_for('/signup.php?err=1'));
    // }
}



?>