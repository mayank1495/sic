<?php require_once('../private/initialize.php'); ?>

<?php

if(isset($_POST['submit']))
{

    // foreach($_POST as $key=>$value)
    // {
    //     echo $key.",".$value;
    // }
    $un=$_POST['un'];
    $pwd=$_POST['pwd'];
    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$un', '$pwd')";
    
   $result = mysqli_query($db, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    
    } else {
    
    echo "Record Create"; 
    
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    Username:
    <input type=text name="un">
    Password:
    <input type=password name="pwd">
    <input type=submit name=submit value=submit>
    </form>
</body>
</html>