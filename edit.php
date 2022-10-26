<?php

$conn1 = mysqli_connect("localhost", "root", "", "class_contact_mgt");

$id = $_GET['searchid']; // get the id through query string

$records = mysqli_query($conn1,"select * from phonebook where pid='$id'"); // select query

$data = mysqli_fetch_array($records); // fetching data

if(isset($_POST['update'])) // when click on Update button
{
    $phone_id= $_POST['pid'];
    $phone_name = $_POST['pname'];
    $phone_number=$_POST['pphoned'];
	
    $edit = mysqli_query($conn1,"update phonebook set pid='$id', pname='$phone_name', pphoned=$phone_number  where pid='$id'");
	
    if($edit)
    {
        mysqli_close($conn1); // Closing connection
        header("location:select.php"); // redirects to the index page
        exit;
    }
    else
    {
        echo mysqli_error($conn1);
    }    	
}
?>

<h3>Updating Data</h3>

<form method="POST">
  <input type="text" name="pid" value="<?php echo $data['pid'] ?>" placeholder="Enter phone ID" Required>
  <input type="text" name="pname" value="<?php echo $data['pname'] ?>" placeholder="Enter phone name" Required>
  <input type="text" name="pphoned" value="<?php echo $data['pphoned'] ?>" placeholder="Enter phone number" Required>
  <input type="submit" name="update" value="Update">
</form>



        