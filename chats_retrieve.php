<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "Aggreyleon";
$dbname = "chat_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$db= $conn;
$tableName="chat_messages";
$columns= ['username','chat_message','filename'];
$fetchData = fetch_data1($db, $tableName, $columns);
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
?>  
	 
	 
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
     <div id="message">
      <?php
			  if(empty($data['filename']??'')){?>@<?php
				  echo $data['username']??'';?><br><?php
				  echo $data['chat_message']??'';?><br><?php
			  }else{?>@<?php
				  echo $data['username']??'';?><br><?php
				  echo $data['chat_message']??'';?><br>
			  <a href="<?php echo $data['filename']??''?>" ><button><object data="<?php echo $data['filename']??''; ?>" width="200px"></object></button></a>
			  <?php } ?>
	</div>
	<?php 
	$sn++;}}else{ ?>
    <?php echo $fetchData; ?>
    <?php
    }?>
	


</body>
</html>