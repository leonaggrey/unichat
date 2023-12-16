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
    
      
			  if($_SESSION['username']==$data['Username']??''){?>
				<div class="chat_link">
					<div class="chat_icon">
						<img src="<?php echo $_SESSION['profile']?>" style="width:3em;height:3em;margin-left:10px;border-radius:1.5em;background-color:black;">
					</div>
					<div class="chat_header">
						<h2>You</h2>
					</div>
				</div>
			  <?php }?>
	<?php
	  $sn++;}}else{ 
     echo $fetchData; 
    }
	if(is_array($fetchData)){      
    $sn=1;
	foreach($fetchData as $data){
    
      
			  if($_SESSION['username']==$data['Username']??''){?>
				<div class="chat_link" style="display:none;">
				</div>
			  <?php } else{?>
			  <div class="chat_link">
					<div class="chat_icon">
						<img src="<?php echo $data['Profile']?>" style="width:3em;height:3em;margin-left:10px;border-radius:1.5em;background-color:black;">
					</div>
					<div class="chat_header">
						<h2><?php echo $data['Full_Name']??''?></h2>
					</div>
				</div>
				<?php }?>
	<?php
	$sn++;}}else{ 
     echo $fetchData; 
    }
	

		
?>
</body>
</html>