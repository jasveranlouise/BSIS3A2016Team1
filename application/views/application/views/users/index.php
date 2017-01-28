<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>img/w3.css">
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">


	body {
        background-image: url(<?=base_url()?>img/1.jpg);
		margin: 0px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: white;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: auto;
		margin-top: 30%;
		margin-bottom: 30%;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		width: 70%;
		color: white;
	}
	
	input[type=text]{
		width: 98%;
		margin: 4px;
		margin-left: 2px;
		padding: 3px;
	}
		input[type=password]{
		width: 98%;
		margin: 4px;
		margin-left: 2px;
		padding: 3px;
	}
	
	input[type=submit] {
    width: 99%;
    background-color: #3d3d3d;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	margin-bottom: 5px;
	}

	input[type=submit]:hover {
		background-color: #2d2d2d;
	}
	
	a {
		color: white; text-decoration: none;
	}
	
	a:hover{
		color: gray;
	}
	
	.error {
    color: red;
	font-size: 14px;
	}

	
	</style>
</head>
<body>
<div  class="w3-row-padding">
	<div class="w3-half">
		.
	</div>
	
	<div class="w3-half">
		<div id="container">
			<h1><font face = "Eraser" >U share </font></h1>

			<div id="body">
				<form method = "POST" action ="Login">
					<font face = "Calibri" size = "3">
						Username: <input type = "text" name = "username" placeholder = "Username"> <?php echo form_error('username'); ?> 
						Password: <input type = "password" name = "password" placeholder = "Password"> <?php echo form_error('password'); ?> 
						<input type = "Submit" value = "Login"/> <br>
					</font>
					<a href = "register"> Register</a> 
				</form>
				
			</div>
			
		</div>
		
	</div>
</div>
</body>
</html>