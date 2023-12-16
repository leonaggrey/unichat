<!DOCTYPE html>
<?php
 session_start(); 
 if (!isset($_SESSION['loggedin']))
        {
                 header('Location: index.php');       
          
        } 
   	
?>
	
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="base.css">
	<link rel="stylesheet" href="messagearea.css">
	<link rel="stylesheet" href="department.css">
    <link rel="stylesheet" href="device.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla&family=Lato&display=swap" rel="stylesheet">
    <title>Chat App</title>
	<?php 
	if (isset($_SESSION['dark'])){
	include("theme_settings.php");
} 	
	?>
    <style>
    @media only screen and (min-width: 801px) {
    #popup-link-menu{
    display:none;
    }
    #close-navi{
    display:none;
    }
    }
    </style>
	<SCRIPT>
		function validateForm1(){
		let i=document.concernform.fullname.value;
		if(i==""){
		alert("Full name must be given.");
		return false;
		}
		let j=document.concernform.email.value;
		if(j==""){
		alert("An email is required.");
		return false;
		}
		let a=document.concernform.regno.value;
		if(a==""){
		alert("Provide your registartion number.");
		return false;
		}
		let b=document.concernform.chat_message.value;
		if(b==""){
		alert("Please input your message.");
		return false;
		}
		
		}
		</SCRIPT>
</head>
<body>
    <main>
        <nav id="navi">
		<div id="logo">
				<img src="jkuat.png">
			</div>
            <div id="sidebar">
                <div class="list">
                     <a href="home.php">
                         <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                         </span>Home
                    </a>
                </div>
                <div class="list ">
                    <a href="noticeboard.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>Noticeboard
                   </a>
               </div>
               <div class="list">
                    <a href="department.php">
                        <span class="icon">
                            <ion-icon name="chatbox-outline"></ion-icon>
                        </span>Chats
                     </a>
               </div>
               
                <div class="list ">
                    <a href="settings.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>        
                        </span>Settings
                    </a>
                </div>
                <div class="list">                
                    <a href="suggestion.php">
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
                <button id="close-navi">Close</button>
            </div>
        </nav>
        <section id="chats">
            <div id="respondent">
				<div div="logo">
				<img src="<?php echo $_SESSION['profile']?>">
				</div>
                <h4 style="color:white">@<?php echo $_SESSION['username']?></h4>
				<h1>Department Chats</h1>
				
				<button id="popup-link">Concerns</button>
				<button id="popup-link-menu">Menu</button>
            </div>
			
            <div id="noticemessages">
				<div class="chath_link">
					<div class="chat_header">
					<?php
					if(isset($_POST['submit'])) {
						include("class_concern_send.php");
					}?>
						<h1>Class Members</h1>
					</div>
				</div>
				<div id="popup-window">
			<div id="popup">
				<div>
				<h1>Department Concerns/Queries</h1>
				
				</div>
				
				<form id="poptext" name="concernform" method="post" action="department.php" enctype="multipart/form-data" onsubmit="return validateForm1()">
					<label for="fullname">Full Name:</label><br>
					<input type="text" id="fullname" maxlength="15" name="fullname" placeholder="Odero Kanyungu"></input><br>
					<label for="email">Email:</label><br>
					<input type="email" id="email" name="email" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" required placeholder="kanyungu@gmail.com"></input><br>
					<label for="regno">Registration No.:</label><br>
					<input type="text" id="regno" maxlength="15" name="regno" placeholder="SCT211-0000/2000"></input><br>
					<div class="text-area">
						<textarea name="chat_message" id="type" cols="30" rows="10" placeholder="Type here..."></textarea>
					</div>
					<label for="file-upload" style="cursor: pointer;" id="send" >
						<ion-icon name="cloud-upload-outline" id="upload"></ion-icon>
						<input type="file" id="file-upload" name="fileitem" accept=".png, .jpg, .jpeg, .pdf" >
					</label>
					<input type="text" name="username" value="<?php echo $_SESSION['username']?>" style="display:none">
					<div id="buttons">
					<button id="close-button">Close</button>
					<button type="submit" name="submit" id="popsubmit">Send</button>
					</div>
				</form>
			</div> 
			</div>
			<div>	
				<?php
					
						include("classmembers_retrieve.php");
					?>
				
			</div>	
				
				
				
				
				
				
			</div>
        </section>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	
</body>
	<script>
  // Get the elements by their ID
  var popupLink = document.getElementById("popup-link");
  var popupWindow = document.getElementById("popup-window");
  var closeButton = document.getElementById("close-button");
  var popupLinkM = document.getElementById("popup-link-menu");
  var popupWindowM = document.getElementById("navi");
  var closeButtonM = document.getElementById("close-navi");
  
  // Show the pop-up window when the link is clicked
  popupLink.addEventListener("click", function(event) {
    event.preventDefault();
    popupWindow.style.display = "block";
  });
  popupLinkM.addEventListener("click", function(event) {
    event.preventDefault();
    popupWindowM.style.display = "block";
  });
  // Hide the pop-up window when the close button is clicked
  closeButton.addEventListener("click", function() {
    popupWindow.style.display = "none";
  });
  closeButtonM.addEventListener("click", function() {
    popupWindowM.style.display = "none";
  });
</script> 
</html>