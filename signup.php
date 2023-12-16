<!doctype html>
<?php
 session_start(); 
?>
<html>
<head>

    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="base.css">
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="device.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla&family=Lato&display=swap" rel="stylesheet">
    <title>Chat App</title>
<script Language="Javascript">
		
		if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
		}	
		</script>
 
<SCRIPT Language="Javascript">
		<!--
		function validateForm(){
		let x=document.signupform.fname.value;
		if(x==""){
		alert("Please give your full name.");
		return false;
		}
	
		let a=document.signupform.username.value;
		if(a==""){
		alert("Username must be filled.");
		return false;
		}
		
		let b=document.signupform.email.value;
		if(b==""){
		alert("Email must be filled ");
		return false;
		}
		let e=document.signupform.regno.value;
		if(e==""){
		alert("Registartion No. must be filled ");
		return false;
		}
		
		
	
		let f=document.signupform.position[0];
		let g=document.signupform.position[1];
		if(!f.checked && !g.checked){
		alert("Kindly select your position, Student/Lecturer/Admin.");
		return false;
		}
		if(f.checked){
		alert("Sorry, there is only one Lecturer/Administrator at the moment.");
		return false;
		}
		let h=document.signupform.password.value;
		if(h==""){
		alert("A password is required to access your account.");
		return false;
		}
		}		
		function validateForm1(){
		let i=document.login.username.value;
		if(i==""){
		alert("Username must be filled to log in.");
		return false;
		}
		let j=document.login.password.value;
		if(j==""){
		alert("A password is required to access your account.");
		return false;
		}
		
		}
		//-->
		</SCRIPT>
<script>
function handleChange()
{
const div1 = document.createElement("div");
div1.setAttribute("id", "addadmin")
const head3 = document.createElement("p");
div1.appendChild(head3);
const text=document.createTextNode("Select your Course:");
head3.appendChild(text);
const para = document.createElement("select");
para.setAttribute("id", "admin")
para.setAttribute("name", "admin")
div1.appendChild(para);
const node = document.createElement("option");
para.setAttribute("name", "admin")
para.setAttribute("value", "Bsc. Computer Science")
para.appendChild(node);
const text1=document.createTextNode("Bsc. Computer Science");
node.appendChild(text1);
/*
const element = document.getElementById("tdright");
const child = document.getElementById("password");
element.insertBefore(para, child); */  
const element = document.getElementById("addtext");
element.appendChild(div1);
const elmnt1 = document.getElementById("head32"); 
elmnt1.remove();

}
function deleteEl(){
const head3 = document.createElement("p");
head3.setAttribute("id", "head32")
const text2=document.createTextNode("Sorry, only one Lecturer/Admin available at the moment!");
head3.appendChild(text2);
const element = document.getElementById("addtext");
element.appendChild(head3);
const elmnt = document.getElementById("addadmin"); 
elmnt.remove();
}
</script>
</head>
<body  style=" height:100vh">
	<section id="chats"  style="width:100%; margin-left:0; height:fit-content; min-height:100vh">
            <div id="respondent" >
				<h1 style="width:fit-content; margin-left:10px">JKUAT</h1>
				<button id="popup-link">Login</button>
				
            </div>
           
			
	<div style="text-align:center; margin-top:80px; font-size:40px; color:white;">
	<h4>Sign Up</h4>
	</div>
    <style>
            @media only screen and (max-width: 800px) {
                 #sign{
	                width:80%;
                    margin-bottom:10px;
                    }
            }
            </style>
	<div id="sign">
		<div id="loghead">
			<?php
					if(isset($_POST['submit'])) {
					include("login.php");
					}
				?>
				
	</div>
	<div style="width:20vw;margin:auto auto 10px auto">
	<img src="jkuat.png" style="width:20vw;height:14vw">
	</div>
	<div id="popup-window">
			<div id="popup" style="height:fit-content;min-width:30%; padding-bottom:50px" >
			<h1 style="text-align:center;color:white; margin-bottom:10px">Login</h1>
				<div style="width:15vw;margin:auto auto 10px auto">
				<img src="jkuat.png" style="width:15vw;height:10vw">
				</div>
			
			<div id="sign" style="width:70%; background-color:#50C878; margin-top:10px;box-shadow:0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" >
				<form id="poptext" method="post" action="signup.php" name="login" onsubmit="return validateForm1()">
					<label for="username">Username:</label><br>
					<input type="text" id="username" maxlength="15" name="username" placeholder="oderokanyungu"></input><br>
					<label for="password">Password:</label><br>
					<input type="password" id="password" maxlength="15" name="password" placeholder="*Password"></></input><br>
					<div id="buttons">
					<button id="close-button">Close</button>
					<button type="submit" name="submit" id="popsubmit">Send</button>
					</div>
				</form>
			</div>
			</div> 
			</div>
	<div id="signhead">
	<?php
		if(isset($_POST['signup'])) {
			include("students.php");
		}
	?>
	</div>
	<form name="signupform" method="POST" action="signup.php" onsubmit="return validateForm()" enctype="multipart/form-data">
	

			Full Name:<br>
			<input type="text" id="name" name="fname" maxlength="15" placeholder="Full Name..."></input><br>
			<label for="username">Username:</label><br>
			<input type="text" id="username" maxlength="15" name="username" placeholder="oderokanyungu"></input><br>
			<label for="email">Email:</label><br>
			<input type="email" id="email" name="email" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" required placeholder="kanyungu@gmail.com"></input><br>
			Select your profile picture(cannot be changed once uploaded):<br><input type="file" id="file-upload" name="fileitem" accept=".png, .jpg, .jpeg" style="margin-bottom:10px">
			<p>Admin/Lecturer <input type="radio" name="position"  onchange="deleteEl()" value="administrator"/>Student  <input type="radio" name="position" onchange="handleChange()" value="worker"/></p>
			<div id="addtext"></div>
			<label for="regno">Registration/Staff No:</label><br>
			<input type="text" id="regno" maxlength="20" name="regno" placeholder="SCT211-0000/2000"></input><br>
			<label for="password">Password:</label><br>
			<input type="password" id="password" maxlength="15" name="password" placeholder="*Password"></></input><br>
			<input type="submit" name="signup" value="SIGN UP"></input>
		
	</form>
	</div>
    </section>
	
    

</body>
	<script>
  // Get the elements by their ID
  var popupLink = document.getElementById("popup-link");
  var popupWindow = document.getElementById("popup-window");
  var closeButton = document.getElementById("close-button");
  // Show the pop-up window when the link is clicked
  popupLink.addEventListener("click", function(event) {
    event.preventDefault();
    popupWindow.style.display = "block";
  });
  // Hide the pop-up window when the close button is clicked
  closeButton.addEventListener("click", function() {
    popupWindow.style.display = "none";
  });
</script> 
</html>