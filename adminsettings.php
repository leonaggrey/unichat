<!DOCTYPE html>
<html lang="en">
<?php
 session_start(); 
  if (!isset($_SESSION['adminloggedin']))
        {
                 header('Location: index.php');       
          
        } 
?>
<head>

<head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="base.css">
	<link rel="stylesheet" href="chat.css">
	<link rel="stylesheet" href="settings.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla&family=Lato&display=swap" rel="stylesheet">
    <title>Chat App</title>
	<script Language="Javascript">
		
		if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
		}	
		</script>
 
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
				<h1>Settings</h1>
				<button id="popup-link"><a href="adminconcern.php" style="text-decoration:none; color:white">Concerns</a></button>
				
            </div>
           
			
			<div id="suggestionbox">
					<h1>Choose your preferred Theme</h1>
			</div>
			
				
				<div>	
							<?php
							if(isset($_POST['submits'])) {
								
								if($_POST["theme"]=="Dark"){
									$_SESSION['dark']=1;
								include("theme_settings.php");
								}else if($_POST["theme"]=="Light"){
									unset($_SESSION['dark']);
								}
								
							}?>
							<?php 
	if (isset($_SESSION['dark'])){
	include("theme_settings.php");
} 	else{
}
	?>
					</div>
				
				
			
			<div>
            <form method="post" action="adminsettings.php" id="settings_form">
				<h1 style="color:#101010"><input type="radio" name="theme" value="Dark">Dark</h1>
				<h1 style="color:#f2f2f2"><input type="radio" name="theme" value="Light">Light</h1>
				<input type="submit" value="Save" name="submits">
			</form>
			</div>
        </section>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
 
</html>