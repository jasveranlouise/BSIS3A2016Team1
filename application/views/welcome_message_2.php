<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>img/w3.css">
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

<style>
.fix{
	position: fixed;
}
.relative{
	position: static;
	
}
.width{
	width: 100%;
}
.container3 {	
			width: 100%;
			background-color: #6c182c;
}
hr{
	margin-bottom: 0px;
	color: black;
}

.post{
	padding: 5px; 
	margin-top: 1.5%;
}

.postButton{
	position: fixed;
    bottom: 0;
    right: 0;
	margin: 0% 2% 1.5% 0%;
}

.w3-modal-content{
	width: 50%;
}

.theme{
	background-color: #5c1526;
}
.theme2{
	background-color: #6c182c;
}
.margin{
	margin: 5px;
}
.left{
	float: left;
}
.right{
	float: right;
}
.postMargin{
	margin-bottom: 10px;
	margin-top: -5px;
}
.postModal{
	background-color: darkred;
	color: white;
}
.textArea{
	width: 100%;
}
.padding{
	padding: 6px 10px 6px 10px;
}
.textBox{
	border-width: 1px;
	width: 100%;
	padding: 3px;
}
</style>	
	
<body style = "background-color: #fbf3f2;">

<nav class="w3-sidenav  theme2 w3-card-2" style="display:none;" id="mySidenav">
  <a href="javascript:void(0)"
  onclick="w3_close()"
  class="w3-closenav w3-large " style = "padding: 3%"  > <font color = "white">  Close &times; </font></a>
  <a style = "padding: 4%;" href="tryit_426.htm#"><font color = "white" size = "3" style = "margin-left: 25%;">
  <img style = "margin-right: 6%;" src="<?php echo base_url();?>img/home_2.png" alt="Smiley face" height="20" width="20">Feed</font></a>
  <a style = "padding: 4%" href="tryit_426.htm#"><font color = "white" size = "3" style = "margin-left: 25%;" >
  <img style = "margin-right: 6%" src="<?php echo base_url();?>img/profile_2.png" alt="Smiley face" height="20" width="20">Profile</font></a>
  <a style = "padding: 4%" href="tryit_426.htm#"><font color = "white" size = "3" style = "margin-left: 25%;" >
  <img style = "margin-right: 6%" src="<?php echo base_url();?>img/people_2.png" alt="Smiley face" height="20" width="20">People</font></a>
  <a style = "padding: 4%" href="tryit_426.htm#"><font color = "white" size = "3" style = "margin-left: 25%;" >
  <img style = "margin-right: 6%" src="<?php echo base_url();?>img/about_2.png" alt="Smiley face" height="20" width="20">About</font></a>
</nav>



<header style = "padding: 1%" class="w3-border-bottom w3-border-black theme w3-container fix width">
    
	<span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span> 
	<font face = "Eraser" size = "5" color = "white"> &nbsp; 	U share </font>
	<font color = "white" size = "6"> | </font>	  <font face = "Century Gothic" size = "5" color = "white"> Confessions </font>
    <div style = "float: right; margin-right: 2%; ">
		<font face = "Calibri" size = "6" color = "white">  Jasver Salva </font>
		<img style = "margin: 0% 0% -5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="40" width="40">
	</div>
</header>
<div id="main">
<br><br><br><br><br>

	<div class="w3-row">
	  <div class="w3-green w3-container w3-col" style="width:25%">
		 
	  </div>
	  
	  <div class="w3-container w3-col" style="width:50%">				
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font face = "Calibri" size = "4" color = "black"> Hidden Name | </font> <font face = "Calibri" size = "4" color = "darkgray"> College	 </font>
		<div style = "margin-top: -1.5%" class="w3-container w3-section w3-pale-red w3-round w3-border">
			<p>I stand in fear
				As she gets near
				Then everything's okay
				I hope this feeling never goes 
			<hr></p>
			
			<div> 
				<a href = "#"> <font class = "postMargin left" style = "margin-right: 10px;" size = "2" >Agree </font> </a> 
				<a href = "#"> <font class = "postMargin left" size = "2" >Disagree </font> </a>
				<font class = "postMargin right" size = "2" >Time/Date </font>
			</div>
		</div>


		
		<br>
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font face = "Calibri" size = "4" color = "black"> Hidden Name | </font><font face = "Calibri" size = "4" color = "darkgray"> College	 </font> <br />
		<div class="w3-container w3-section w3-pale-red w3-round w3-border">
		<p>London is the most populous city in the United Kingdom,
		with a metropolitan area of over 9 million inhabitants. <hr></p>
			<div > 
				<a href = "#"> <font class = "postMargin left" style = "margin-right: 10px;" size = "2" >Agree </font> </a> 
				<a href = "#"> <font class = "postMargin left" size = "2" >Disagree </font> </a>
				<font class = "postMargin right" size = "2" >Time/Date </font>
			</div>
		</div>

		
		<br>
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font face = "Calibri" size = "4" color = "black"> Hidden Name | </font><font face = "Calibri" size = "4" color = "darkgray"> College	 </font> <br />
		<div class="w3-container w3-section w3-pale-red w3-round w3-border">
		<p>London is the most populous city in the United Kingdom,
		with a metropolitan area of over 9 million inhabitants. <hr></p>
			<div > 
				<a href = "#"> <font class = "postMargin left" style = "margin-right: 10px;" size = "2" >Agree </font> </a> 
				<a href = "#"> <font class = "postMargin left" size = "2" >Disagree </font> </a>
				<font class = "postMargin right" size = "2" >Time/Date </font>
			</div>
		</div>

		<br>
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Hidden Name	 </font> <br />
		<div  class = "container3 post">
				<font style = "margin: 5px;" face = "Calibri" size = "4" color = "white"> Pictures or posts anything else	 </font> <br><hr>
				<div style = "margin-top: 5px;">
					<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Like </font>
					<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Comment </font>
					<font style = "margin: 5px; float: right;" face = "Calibri" size = "2" color = "white"> Date/Time </font>
				</div>
		</div>
		
		<br>
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Hidden Name</font> <br />
		<div class = "container3 post">
				<font style = "margin: 5px;" face = "Calibri" size = "4" color = "white"> Pictures or posts anything else	 </font> <br><hr>
				<div style = "margin-top: 5px;">
					<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Like </font>
					<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Comment </font>
					<font style = "margin: 5px; float: right;" face = "Calibri" size = "2" color = "white"> Date/Time </font>
				</div>
		</div>
		
		<br>
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Hakeem Polistico	 </font> <br />
		<div  class = "container3 post">
				<font style = "margin: 5px;" face = "Calibri" size = "4" color = "white"> Pictures or posts anything else	 </font> <br><hr>
				<div style = "margin-top: 5px;">
					<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Like </font>
					<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Comment </font>
					<font style = "margin: 5px; float: right;" face = "Calibri" size = "2" color = "white"> Date/Time </font>
				</div>
		</div>
		
		<br>
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Hakeem Polistico	 </font> <br />
		<div class = "container3 post">
				<font style = "margin: 5px;" face = "Calibri" size = "4" color = "white"> Pictures or posts anything else	 </font> <br><hr>
				<div style = "margin-top: 5px;">
					<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Like </font>
					<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Comment </font>
					<font style = "margin: 5px; float: right;" face = "Calibri" size = "2" color = "white"> Date/Time </font>
				</div>
		</div>
		
		<br>	
		
	  </div>
	  
	  
	  <div class="w3-container w3-col" style="width:25%">
		 
	  </div>
	</div>

</div>
      
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "18%";
  document.getElementById("mySidenav").style.marginTop = "76px";
  document.getElementById("mySidenav").style.width = "18%";
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidenav").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
 
<a  onclick="document.getElementById('id01').style.display='block'" class="w3-btn-floating-large w3-pale-red postButton"><font color = "red">+</font></a> 

<div id="id01" class="w3-modal">
  <div style = "width: 40%; margin-top: -3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h4>Confess</h4>
    </header>
    <div class="w3-container ">
	
		<p>
			<form method = "POST" action ="reqcon">
				<input type = "hidden" name = "id_no"> 
				<input type = "hidden" name = "date"> 
				<input type = "hidden" name = "time"> 
				<input type = "hidden" name = "account_name"> 


				<h4>Confession Title</h4>
					<input class = "textBox w3-border-red" type = "text" name = "confession_title" placeholder = "Confession title">
				<h4>Confession Text</h4> 
					<textarea rows = "5" class = "textArea  w3-border-red" name = "confession_text" > </textarea>					
				<h4>Confess Anonymously?
					<input class = "w3-border w3-border-red" type = "checkbox" name = "anonymous" value = "anonymous"> </h4>
				<h4>Hidden Name</h4>
					<input class = "textBox w3-border-red" type = "text" name = "hidden_name" placeholder = "Hidden Name">
				<h4>College</h4>
					<input class = "textBox w3-border-red" type = "text" name = "college" placeholder = "College">
					<br>
				<font style = "Century Gothic" size = "2" color = "red"> <br> *You will be notified once confession request is approved. </font>
				<input style = "margin: -4px 0px 10px 0px;" class = "padding right w3-btn w3-white w3-border w3-border-red" type = "submit" value = "Confess" >
			</form>
			
			
		</p>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>