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



$username=$_POST["username"];
$chat_message=$_POST["chat_message"];


     $conn->query("INSERT INTO suggestions(username,chat_message,filename)
	VALUES ('$username','$chat_message','$name')");?>
	<div id="messright">
	<div id="suggmessage">
      <?php
			  if(empty($name)){?><?php
				  echo $chat_message;?><br><?php
			  }else{
				  echo $chat_message;?><br>
			  <a href="<?php echo $name?>" ><button><object data="<?php echo $name; ?>" width="200px"></object></button></a>
			  <?php } ?>
	</div>
    </div>
	<div id="messleft">
					<div id="suggbox">
						<p>Thanks for your response, we'll look into it. Do you have anything else?</p>
							
					</div>
	</div>



</body>
</html>