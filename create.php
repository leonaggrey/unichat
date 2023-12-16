<?php
$servername = "localhost";
$username = "root";
$password = "Aggreyleon";



// Create connection
$conn1 = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn1) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE id21504468_chat_app";
if (mysqli_query($conn1, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn1);
}
$dbname = "id21504468_chat_app";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



$sql = "CREATE TABLE chat_messages (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}


$sql = "CREATE TABLE noticeboard(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE software_chats (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE adt_chats (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE general_chats (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE systems_chats (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE analysis_chats (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE programming_chats (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE multimedia_chats (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE operations_chats (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE suggestions (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE students_chats (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
chat_message VARCHAR(500),
filename VARCHAR(150)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE class_concerns (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Fullname VARCHAR(30),
Email VARCHAR(30),
Reg_No VARCHAR(30),
Concern VARCHAR(500),
Filename VARCHAR(250)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE dept_concerns (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Fullname VARCHAR(30),
Email VARCHAR(30),
Reg_No VARCHAR(30),
Concern VARCHAR(500),
Filename VARCHAR(250)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}
$sql = "CREATE TABLE university_concerns (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Fullname VARCHAR(30),
Email VARCHAR(30),
Reg_No VARCHAR(30),
Concern VARCHAR(500),
Filename VARCHAR(250)
)";
if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

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

?>
