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
	margin-right: 10px;
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
	border-width: 1.9px;
	border-color: black;
}
.pointer{
	cursor: pointer;
}
.inputWidth{
	width: 90%;
	padding-left: 5px;
}
.paddingtb{
	padding-top: 2px;
	padding-bottom: 2px;
}
.marginTop{
	margin-top: -5px;
}
.commentBox{
	width: 90%;
	padding: 3px;
}
.borderMargin{
	margin-top: 25px;
	margin-bottom: 25px;
}
</style>	
	
<body style = "background-color: #fbf3f2;">

<nav class="w3-sidenav  theme2 w3-card-2" style="display:none;" id="mySidenav">
  <a href="javascript:void(0)"
  onclick="w3_close()"
  class="w3-closenav w3-large " style = "padding: 3%"  > <font color = "white">  Close &times; </font></a>
  <a style = "padding: 4%;" href="tryit_426.htm#"><font color = "white" size = "3" style = "margin-left: 25%;">
  <img style = "margin-right: 6%;" src="<?php echo base_url();?>img/home_2.png" alt="Smiley face" height="20" width="20">Feed</font></a>
  <a style = "padding: 4%" href="profile"><font color = "white" size = "3" style = "margin-left: 25%;" >
  <img style = "margin-right: 6%" src="<?php echo base_url();?>img/profile_2.png" alt="Smiley face" height="20" width="20">Profile</font></a>
  <a style = "padding: 4%" href="tryit_426.htm#"><font color = "white" size = "3" style = "margin-left: 25%;" >
  <img style = "margin-right: 6%" src="<?php echo base_url();?>img/people_2.png" alt="Smiley face" height="20" width="20">People</font></a>
  <a style = "padding: 4%" href="tryit_426.htm#"><font color = "white" size = "3" style = "margin-left: 25%;" >
  <img style = "margin-right: 6%" src="<?php echo base_url();?>img/about_2.png" alt="Smiley face" height="20" width="20">About</font></a>
  <a style = "padding: 4%" href="tryit_426.htm#"><font color = "white" size = "3" style = "margin-left: 25%;" >
  <img style = "margin-right: 6%" src="<?php echo base_url();?>img/logout_4.png" alt="Smiley face" height="20" width="20">Logout</font></a>
</nav>



<header style = "padding: 1%" class="w3-border-bottom w3-border-black theme w3-container fix width">
    
	<span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span> 
	<font face = "Eraser" size = "5" color = "white"> &nbsp; 	U share </font>
	<font color = "white" size = "6"> | </font>	  <font face = "Century Gothic" size = "5" color = "white"> Confessions </font>
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
	  <div class="w3-green w3-container w3-col" style="width:25%">
		 
	  </div>
	  
	  <div class="w3-container w3-col" style="width:50%">	

		<?php foreach($posts as $post){?>
		
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font face = "Calibri" size = "4" color = "black"> &nbsp; <?php echo $post->hidden_name;?> | </font> <font face = "Calibri" size = "4" color = "darkgray"> <?php echo $post->college;?>	 </font>
		<div style = "margin-top: -1.5%" class="w3-container w3-section w3-pale-red w3-round w3-border">
			<p>
				<font face = "Calibri" size = "4" color = "darkred"> 
					<b><?php echo $post->confession_title;?></b>
				</font>
			</p>		
			
		<p class = "marginTop" ><pre><font face = "Calibri" size = "4" ><?php echo $post->confession_text;?></font></pre><hr>
			</p> 
			
			
			
			<div> 
				<a href = "#"> <img style = "margin: -1.2% 0% -5% 0%" class = "postMargin left" src="<?php echo base_url();?>img/agree.png" alt="Smiley face" height="20" width="20"> </a>
				<a href = "#"> <img style = "margin: -.5% 0% -5% 5%" class = "postMargin left" src="<?php echo base_url();?>img/disagree.png" alt="Smiley face" height="20" width="20">  </a>
				<a class = "pointer" onclick="document.getElementById('id04').style.display='block'"> <font class = "postMargin left"  style = "margin-left: 65px;" size = "2" >Comments </font> </a>
				
				<font class = "postMargin right" size = "2" ><?php echo $post->time;?> / <?php echo $post->date;?> </font>
			</div>
		</div>
		
		<br>
    
         
         
     <?php }?>  
		
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
  <div style = "width: 40%; margin-top: -3%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h4><img style = "margin: -15% -.9% -2% -1%" src="<?php echo base_url();?>img/confession.png" height="35" width="35"> onfess</h4>
    </header>
    <div class="w3-container ">
	
		<p>
			<form method = "POST" action ="reqcon">
				<input type = "hidden" name = "id_no"  > 
				<input type = "hidden" name = "date" value = "<?php echo date("Y-m-d");?>"> 
				<input type = "hidden" name = "time" value = "<?php echo date("h:ia");?>"> 
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
			<br>
			
		</p>
    </div>
  </div>
</div>

<div id="id02" class="w3-modal">
 
  <div style = "width: 40%; margin-top: -1%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
		  <span onclick="document.getElementById('id02').style.display='none'"
		  class="w3-closebtn">&times;</span>
		  <center><img class = "w3-circle imageCircle" style = "margin: -15% 0% -1.5% -1%" src="<?php echo base_url();?>img/hakeem_2.jpg" alt="Smiley face" height="150" width="150"> </center>
		  <h4><center>Hakeem Polistico</center></h4>
    </header>
    <div class="w3-container ">
	
	<font face = "Century Gothic" size = "3" >
		
		<p> <b style = "left">Info</b> <a class = "pointer" onclick="document.getElementById('id03').style.display='block'" style = "float: right;" > edit </a></p>
		<table>
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Email:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> hjpolistico@gmail.com </font></p>
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
					<p class = "infoMargin" > Sex:</p>
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
	</font>
    </div>
  </div>

</div>

<div id="id03" class="w3-modal">
 
  <div style = "width: 40%; margin-top: -1%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
		  <span onclick="document.getElementById('id03').style.display='none'"
		  class="w3-closebtn">&times;</span>
		  <center><img class = "w3-circle imageCircle" style = "margin: -15% 0% -1.5% -1%" src="<?php echo base_url();?>img/hakeem_2.jpg" alt="Smiley face" height="150" width="150"> </center>
		  <h4><center>Hakeem Polistico</center></h4>
    </header>
    <div class="w3-container ">
	
	<font face = "Century Gothic" size = "3" >
		
		<p> <b>Info</b> </p>
		<table>
			<form>
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Email:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth" type = "email" name = "email" > </p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Contact No:</p>
				</td>
				
				<td>
					<p class = "infoMargin" ><input class = "inputWidth" type = "text" name = "contact_no" ></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Birthdate:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <input class = "inputWidth" type = "date" name = "birthdate" ></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Sex:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > 
					<select class="w3-select w3-border paddingtb inputWidth" name="sex">
						<option value="" disabled selected>Choose your option</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select></p>
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
					<p class = "infoMargin" > <input class = "inputWidth" placeholder = "xx-xxx-xx" pattern = "\d{2}[\-]\d{3}[\-]\d{3}" type = "text" name = "student_no" ></p>
				</td>
			</tr>
				
			<tr>
				<td>
					<p class = "infoMargin" > Course:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <input class = "inputWidth" type = "text" name = "course" ></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > College:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <select class="w3-select w3-border paddingtb inputWidth" name="college">
						<option value="" disabled selected>Choose your option</option>
						<option value="College of Science">College of Science</option>
						<option value="College of Engineering">College of Engineering</option>
						<option value="College of Industrial Technology">College of Industrial Technology</option>
						<option value="College of Industrial Education">College of Industrial Education</option>
						<option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
						<option value="College of Liberal Arts">College of Liberal Arts</option>
					</select></p>
				</td>
			</tr>
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Year Graduated:</p>
				</td>
				
				<td>
					<p class = "infoMargin" ><input class = "inputWidth" type = "month" name = "year_graduated" ></p>
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
			<input style = "margin-left: 45%;" type = "submit" value = "save">
		</form>			
		
		<br>
		<br>
	</font>
    </div>
  </div>

</div>

<div id="id04" class="w3-modal">
  <div style = "width: 40%; margin-top: -3%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
      <span onclick="document.getElementById('id04').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h4><img style = "margin: -15% -.9% -2% -1%" src="<?php echo base_url();?>img/confession.png" height="35" width="35"> omments</h4>
    </header>
    <div class="w3-container ">
	
	<br>
	
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font faceimg style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">		
		<font face = "Calibri" size = "4" color = "black"> &nbsp; Hidden Name| </font> <font face = "Calibri" size = "4" color = "darkgray"> College </font>
		<div style = "margin-top: -1.5%" class="w3-container w3-section w3-pale-red w3-round w3-border">
			<p>
				<font face = "Calibri" size = "4" color = "darkred"> 
					<b>Confession Title</b>
				</font>
			</p>		
			
			<p class = "marginTop" ><font face = "Calibri" size = "4" >
			Confession - Text, 
			Confession - Text,
			Confession - Text, 
			Confession - Text, 
			Confession - Text, </font><hr>
			</p> 
			
			<div> 
				<font class = "postMargin left" size = "2" >10 agrees / 2 disagrees </font>
				<font class = "postMargin right" size = "2" >time / date </font>
			</div>
		</div>
		
		
		<div class = "w3-border-bottom borderMargin" style = "margin-left: -16px; margin-right: -16px;" ></div>
		
		
		<p>
			
			<form>
				<img style = "margin: 0% 0% 0% 0%" src="<?php echo base_url();?>img/hakeem_2.jpg" class = "left w3-circle imageCircle" alt="Smiley face" height="35" width="35">
				<input type = "text" style = "width: 90%;" class = "w3-input left" name = "comment" placeholder = "type your comment here">
			</form>
		</p>
		<br><br>
			<p>
			<img style = "margin: 0% 0% -2.3% 0%" src="<?php echo base_url();?>img/hakeem_2.jpg" class = "w3-circle imageCircle" height="35" width="35">
			
				<font face = "Century Gothic" size = "3" color = "darkred"> 
					
					<b>Linkin Park</b>
				</font>
					
				<font face = "Century Gothic" size = "3" color = "black">
					I've become so numb, I can't feel you there. Become so tight so much more aware.
				</font>
				
				<font face = "Century Gothic" size = "2" color = "darkgray">
					time/date
				</font>		
		
			</p>
		<p>
			<p>
				<font face = "Century Gothic" size = "3" color = "darkred"> 
					<img style = "margin: 0% 0% -2.3% 0%" src="<?php echo base_url();?>img/hakeem_2.jpg" class = "w3-circle imageCircle" height="35" width="35">
					<b>Linkin Park</b>
				</font>
					
				<font face = "Century Gothic" size = "3" color = "black">
					In the end it doesn't really matter.
				</font>
				
				<font face = "Century Gothic" size = "2" color = "darkgray">
					time/date
				</font>
			</p>		
		
		</p>
		
		<p>
			
			<p>
				<font face = "Century Gothic" size = "3" color = "darkred"> 
					<img style = "margin: 0% 0% -2.3% 0%" src="<?php echo base_url();?>img/hakeem_2.jpg" class = "w3-circle imageCircle" height="35" width="35">
					<b>Linkin Park</b>
				</font>
					
				<font face = "Century Gothic" size = "3" color = "black">
					We can't wait to burn it to the ground.
				</font>
				
				<font face = "Century Gothic" size = "2" color = "darkgray">
					time/date
				</font>
			</p>		
		
		</p>
		
		<br>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var modal3 = document.getElementById('id03');
var modal4 = document.getElementById('id04');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	if (event.target == modal2) {
        modal2.style.display = "none";
    }
	if (event.target == modal3) {
        modal3.style.display = "none";
    }
	if (event.target == modal4) {
        modal4.style.display = "none";
    }
	
}
</script>

</body>
</html>