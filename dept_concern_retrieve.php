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


$db= $conn;
$tableName="dept_concerns";
$columns= ['Fullname','Email', 'Reg_No','Concern' ,'Filename'];
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
			  if(empty($data['Filename']??'')){?><?php
				  echo $data['Fullname']??'';?><br><?php
				  echo $data['Email']??'';?><br><?php
				  echo $data['Reg_No']??'';?><br><?php
				  echo $data['Concern']??'';?><br><?php
			  }else{?><?php
				  echo $data['Fullname']??'';?><br><?php
				  echo $data['Email']??'';?><br><?php
				  echo $data['Reg_No']??'';?><br><?php
				  echo $data['Concern']??'';?><br>
			  <a href="<?php echo $data['Filename']??''?>" ><button><object data="<?php echo $data['Filename']??''; ?>" width="200px"></object></button></a>
			  <?php } ?>
	</div>
	<?php 
	$sn++;}}else{ ?>
    <?php echo $fetchData; ?>
    <?php
    }?>
	


</body>
</html>