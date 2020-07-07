<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Successful Sign Up</title>
    </head>
    <body>
	<div id="banner">
		<button id="Home" class="banner1">CHECK YOUR EMAIL TO VERIFY THAT THIS ACCOUNT IS YOURS
		</button>
	</div>
	<div id="dialog">
		<button id="Start" onclick="window.location.assign('login.php')" class="Homie">Continue</button>
	</div>
<style>
p{
	font-family: 'Aharoni';
	visibility: hidden;
}
.Homie{
	position: relative;
	height: 24%;
	font-family: 'Aharoni';
	border: none;
	opacity: 0.5;
	color: white;
	-webkit-transition: height 1s;
	transition: height 1s;
}
.Homie:hover{
	opacity: 0.7;
	height: 50%;
	text-align: left;
}
#Start{
	background: green;
	top: 3px;
	font-size: 72px;
	width: 100%;
}
#dialog{
	background: white;
	position: absolute;
	top: 100px;
	left: 0px;
	height: 70%;
	width: 100%;
	opacity: 0.8;
}
#banner{
	position: absolute;
	top: 20px;
	left: 0px;
	background: #28919F;
	height: 65px;
	width: 100%;
}
.banner1{
	font-family: 'Calibri';
	font-size: 20px;
	font-weight: bold;
	float: left;
	height: 100%;
}
body{
	background: #A9D7E4;
}
#Home{
	background: white;
	border: none;
	opacity: 0.8;
}
#Home:hover{
	opacity: 1;
}
</style>
    </body>
</html>
