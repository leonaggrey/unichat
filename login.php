<!doctype html>

<html>
<head>
</head>
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


		
		
$username=$_POST["username"];
$password=$_POST["password"];
if($username != "adminpetronilla" or $password !="drpetronila") {
$result = $conn->query("SELECT Full_Name FROM students1 WHERE  Username= '$username' OR Password='$password'" );
if($result->num_rows == 0) {
		echo "<h3>Sorry, the details you provided are not in our system</h3>";
} else {
		$resulta = $conn->query("SELECT Full_Name FROM students1 WHERE Username = '$username' AND Password='$password'" );
		if($resulta->num_rows == 0) {
		echo "<h3>Username or password is wrong, check your details.</h3>";
		}
		else {
			      $_SESSION['loggedin']=1;
				  $_SESSION['username']=$username;
				  
				  
				  
				  

$db= $conn;
$tableName="students1";
$columns= ['Full_Name','Username','Profile'];
function fetch_data1($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
$fetchData = fetch_data1($db, $tableName, $columns);


	 
	 
 
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    
      
			  if($username==$data['Username']??''){
				  $_SESSION['profile']=$data['Profile']??'';
				  $_SESSION['fullname']=$data['Full_Name']??'';
				  
			  } 
	
	
	$sn++;}}else{ 
     echo $fetchData; 
 
    }
	

			
			header("Location:home.php");
		
		}
}
}else{      
	$_SESSION['adminloggedin']=1;
	$_SESSION['username']="Lec.@".$username;
			header("Location:adminhome.php");
}
?>
</body>
</html>