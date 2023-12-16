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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla&family=Lato&display=swap" rel="stylesheet">
    <title>Chat App</title>
	<?php 
	if (isset($_SESSION['dark'])){
	include("theme_settings.php");
} 	
	?>
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
				<h1>Software Engineering</h1>
				
				<button id="popup-link"><a href="adminclassconcern.php" style="text-decoration:none; color:white">Concerns</a></button>
				
            </div>
            <div id="messages">
				
				<?php
				
					if(isset($_POST['submit'])) {
						include("chat_messages.php");
					}else{
						include("noticeboard_retrieve.php");
					}?>
				
			</div>
		
			<div >
            <form method="post" id="text" action="adminstudentsspace.php" enctype="multipart/form-data">
                <label for="file-upload1" style="cursor: pointer;" id="send">
                    <ion-icon name="cloud-upload-outline" id="upload"></ion-icon>
                    <input type="file" id="file-upload1" name="fileitem" accept=".png, .jpg, .jpeg, .pdf" style="display:none">
                  </label>
				 
                 <input type="text" name="username" value="<?php echo $_SESSION['username']?>" style="display:none">
                
                    <textarea name="chat_message" id="type" cols="30" rows="10" placeholder="typing.."></textarea>
                    <button type="submit" name="submit">Send</button>
                
            </form>
			</div>
        </section>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>