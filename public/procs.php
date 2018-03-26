<?php require_once('../private/initialize.php'); ?>

<?php
echo "HELLOO";
if(isset($_POST['submit']))
{
    $query_names="(";
    $query_values="(";
    
    foreach($_POST as $key=>$value)
    {
        if($key!="submit"){
        $query_names.=$key.",";
        $query_values.="'".$value."'".",";
        }
    }
    
    
    $query_names=rtrim($query_names,", ");
    $query_names.=")";
    $query_values=rtrim($query_values,", ");
    $query_values.=")";
    echo $query_names; echo nl2br("\n");
    // echo $query_values;
    $query="INSERT INTO stu ".$query_names." VALUES".$query_values;
    echo $query;
    $res=mysqli_query($db,$query);
    if(!$res) {
        echo "erroor";
        die('Query FAILED' . mysqli_error($db));
    
    } else {
    echo "Record Create"; 
    }
}



?>