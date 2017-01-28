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
	width: 55%;
	margin-left: 28%;
	border-color: lightgray;
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
.infoMargin{
	margin: 0px 5px 5px 20px
}
.imageCircle{
	border: solid;
	border-width: 2px;
	border-color: black;
}
.pointer{
	cursor: pointer;
}
.info{
	margin-left: 30%;
}
.info2{
	margin-left: 53%;
}
input[type = text]{
	width: 35%;
	padding: 3px;
	font-size: 15px;
}
input[type = submit]{
	width: 70px;
	padding: 1px;
	font-size: 20px;
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
	<font color = "white" size = "6"> | </font>	  <font face = "Century Gothic" size = "5" color = "white"> Profile </font>
    <div style = "float: right; margin-right: 2%; ">
		<font face = "Calibri" size = "6" color = "white">  Jasver Salva </font>
		<a onclick="document.getElementById('id02').style.display='block'">
			<img class = "pointer" style = "margin: 0% 0% -5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="40" width="40"> 
		</a>
	</div>
</header>
<div id="main">
<br><br><br><br><br>

	<div class="w3-row">
	  
	  
	  	

			<center><img class = "w3-circle imageCircle" style = "margin: 0% 0% 0% 0%" src="<?php echo base_url();?>img/hakeem.jpg" alt="Smiley face" height="200" width="200"> </center>
			<h2> <center>Hakeem Polistico</center></h2>
		
			<font face = "Century Gothic" size = "3" >
		<form>
		<p class = "info"> <b>Info</b> </p>
		
		<table class = "info">
			<tr >
				<td width = "17%">
					<p class = "infoMargin" > Email:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <input type = "text" name = "" value = ""> </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Contact No:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <input type = "text" name = "" value = ""> </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Birthday:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <input type = "text" name = "" value = ""> </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Gender:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <input type = "text" name = "" value = ""> </font></p>
				</td>
			</tr>
		</table>
		<hr>
		
		<p class = "info"> <b>Student Info</b> </p>
		<table class = "info">
			<tr >
				<td width = "17%">
					<p class = "infoMargin" > Student No:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <input type = "text" name = "" value = ""> </font></p>
				</td>
			</tr>
			
			<tr >
				<td width = "17%">
					<p class = "infoMargin" > Year:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <input type = "text" name = "" value = ""> </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Course:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <input type = "text" name = "" value = ""> </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > College:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <input type = "text" name = "" value = ""> </font></p>
				</td>
			</tr>
			
			<tr >
				<td width = "17%">
					<p class = "infoMargin" > Year Graduated:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <input type = "text" name = "" value = ""> </font></p>
				</td>
			</tr>
			
			
			
			
			
		</table>
		<hr>
		
		<p class = "info"> <b>Confessions</b> </p>
		<table class = "info">
			<tr >
				<td width = "17%">
					<p class = "infoMargin" > Confession Approved:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> 2 </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Confessions:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> 10 </font></p>
				</td>
			</tr>
						
		</table>
		<input class = "info2" type = "submit" value = "save">
		<br>
		
	</form>
	</div>
	<br>
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
 



<div id="id02" class="w3-modal">
 
  <div style = "width: 40%; margin-top: -1%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
      <span onclick="document.getElementById('id02').style.display='none'"
      class="w3-closebtn">&times;</span>
	  <center><img class = "w3-circle imageCircle" style = "margin: -15% 0% -1.5% -1%" src="<?php echo base_url();?>img/hakeem.jpg" alt="Smiley face" height="150" width="150"> </center>
      <h4> <center>Hakeem Polistico</center></h4>
    </header>
    <div class="w3-container ">
	
	<font face = "Century Gothic" size = "3" >
		<p> <b>Info</b> </p>
		<table>
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Email:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> hjpolistico@gmail.com</font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Contact No:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> 0997-586-4782 </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Birthday:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> July 22 </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Gender:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> Male </font></p>
				</td>
			</tr>
		</table>
		<hr>
		
		<p> <b>Student Info</b> </p>
		<table>
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Student No:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> 14-038-014 </font></p>
				</td>
			</tr>
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Year:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> 3rd Year </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Course:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> Bachelor of Science in Information System </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > College:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> College of Science </font></p>
				</td>
			</tr>
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Year Graduated:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> N/A </font></p>
				</td>
			</tr>
			
			
			
			
			
		</table>
		<hr>
		
		<p> <b>Confessions</b> </p>
		<table>
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Confession Approved:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> 2 </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Confessions:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> 10 </font></p>
				</td>
			</tr>
						
		</table>
		
		<br>
	</form>
	</font>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>