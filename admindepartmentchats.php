<!DOCTYPE html>
<?php
 session_start(); 
  if (!isset($_SESSION['adminloggedin']))
        {
                 header('Location: index.php');       
          
        } 
   	
?>
	
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="base.css">
	<link rel="stylesheet" href="messagearea.css">
	<link rel="stylesheet" href="chatss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla&family=Lato&display=swap" rel="stylesheet">
    <title>Chat App</title>
	<?php 
	if (isset($_SESSION['dark'])){
	include("theme_settings.php");
} 	
	?>
</head>
<body>
    <main>
        <nav>
		<div id="logo">
				<img src="jkuat.png">
			</div>
            <div id="sidebar">
                <div class="list">
                     <a href="adminhome.php">
                         <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                         </span>Home
                    </a>
                </div>
                <div class="list ">
                    <a href="adminnoticeboard.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>Noticeboard
                   </a>
               </div>
               <div class="list">
                    <a href="admindepartment.php">
                        <span class="icon">
                            <ion-icon name="chatbox-outline"></ion-icon>
                        </span>Chats
                     </a>
               </div>
               
                <div class="list ">
                    <a href="adminsettings.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>        
                        </span>Settings
                    </a>
                </div>
                <div class="list">                
                    <a href="adminsuggestion.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>Suggestion Box
                    </a>
                </div>
                <div class="list">       
                    <a href="index.php">
                        <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>Log Out
                    </a>
                </div>
                
            </div>
        </nav>
        <section id="chats">
            <div id="respondent">
                <ion-icon name="happy-outline" id="user"></ion-icon>
                <h4 style="color:white"><?php echo $_SESSION['username']?></h4>
				<h1>Chats</h1>
				
				<button id="popup-link"><a href="admindepconcern.php" style="text-decoration:none; color:white">Concerns</a></button>
				
            </div>
            <div id="noticemessages">
				<div class="chath_link">
					<div class="chat_header">
						<h1>Department Room</h1>
					</div>
				</div>
				<div ><a href="adminsoftwareengineering.php" class="chat_link">
					<div class="chat_icon">
						<ion-icon name="happy-outline" id="user"></ion-icon>
					</div>
					<div class="chat_header">
						<h2>3.1 Software Engineering Class</h2>
					</div></a>
				</div>
				<div ><a href="" class="chat_link">
					<div class="chat_icon">
						<ion-icon name="happy-outline" id="user"></ion-icon>
					</div>
					<div class="chat_header">
						<h2>2.1 Operating Systems</h2>
					</div></a>
				</div>
				
				
			</div>
        </section>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>