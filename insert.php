<?php

    require_once("database_credentials.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['pid']) || empty($_POST['pname']) || empty($_POST['pphoned']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $phone_id = $_POST['pid'];
            $phone_name = $_POST['pname'];
            $phone_number = $_POST['pphoned'];

            $query = " insert into phonebook (pid, pname,pphoned) values('$phone_id','$phone_name','$phone_number')";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:select.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>