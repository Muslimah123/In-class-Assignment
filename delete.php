<?php require 'database_credentials.php';

//create connection with database


$cid = $_GET['searchid'];
$del = mysqli_query($conn,"delete from phonebook where pid = '$cid'"); // delete query

if($del)
{
    
    header("location:select.php"); // redirects to my_form page

    exit;       
}
else
{
    echo "Error deleting record"; // showing error
}




?>