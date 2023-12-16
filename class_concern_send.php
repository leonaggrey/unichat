<!doctype html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "Aggreyleon";
$dbname = "id21504468_chat_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name= $_FILES["fileitem"]["name"];

$tmp_name= $_FILES['fileitem']['tmp_name'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['chat_message'];

if (isset($name)) {

$path= '/uploads/';

if (!empty($name)){
if (move_uploaded_file($tmp_name, $name)) {
}
}
}



$fullname=$_POST["fullname"];
$email=$_POST['email'];
$regno=$_POST['regno'];
$chat_message=$_POST["chat_message"];


     $conn->query("INSERT INTO class_concerns(Fullname,Email,Reg_No,Concern,Filename)
	VALUES ('$fullname','$email','$regno','$chat_message','$name')");?>
	
	
					<div id="suggbox">
						<p style="color:green">Sent, will get back to you...</p>
							
					</div>
	



</body>
</html>