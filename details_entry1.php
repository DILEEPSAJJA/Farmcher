<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $user_name = $_POST['user_name'];
	 $email = $_POST['email'];
	 $subject = $_POST['subject'];
	 $message = $_POST['message'];

	 $sql_query = "INSERT INTO entry_details1 (user_name,email,subject,message)
	 VALUES ('$user_name','$email','$subject','$message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Successfully Submited!";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>