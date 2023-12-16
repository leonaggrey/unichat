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
/*


$sql = "CREATE TABLE students1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Full_Name VARCHAR(30),
Username VARCHAR(30),
Email VARCHAR(30) ,
Profile VARCHAR(300),
Reg_No VARCHAR(30),
Password VARCHAR(30) 
)";

if (mysqli_query($conn, $sql)) {
  echo "Table workers created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
*/


$name= $_FILES["fileitem"]["name"];

$tmp_name= $_FILES['fileitem']['tmp_name'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);


if (isset($name)) {


if (!empty($name)){
if (move_uploaded_file($tmp_name, $name)) {
}
}
}
if(empty($name)){
	$name="jkuat.png";
}



$full_name=$_POST["fname"];
$username=$_POST["username"];
$email=$_POST["email"];
$regno=$_POST["regno"];
$password=$_POST["password"];
$result = $conn->query("SELECT Full_name FROM students1 WHERE Reg_No = '$regno'" );
if($result->num_rows == 0) {
	$resulta = $conn->query("SELECT Full_name FROM students1 WHERE Username = '$username'" );
    if($resulta->num_rows == 0) {
     $conn->query("INSERT INTO students1 (Full_Name,Username,Email,Profile,Reg_No,Password)
VALUES ('$full_name', '$username', '$email', '$name','$regno','$password')");
		echo "<h2 style='color:#00AA00;'>Welcome ".$full_name.", You can now login!</h2>";
		}
		else {
			echo "<h3 style='color:white;'>".$username." is already available, please use another username.</h3>";
		}
} else {
		echo "<h1 style='color:#990000;'>Wewe ".$full_name." wewe, si ulisharegister ama? Login buana!</h1>";
}

?>

</body>
</html>