<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome to talkZulu</title>
</head>
<body>
<div id="box"></div>
<form action="login.php" method="post">
<input type="text" name="username" id="username" class="boxed"></input>
<input type="password" name="password" id="password" class="pass"></input>
<input type="submit" value="LOGIN" id="sub"></input>
</form>
<button id="sign" onclick="window.location.href='register.php'">SIGN UP</button>
<b><p id="Login">USERNAME:</p></b>
<b><p id="Password">PASSWORD:</p></b>
<p id="output1"></p>
<div id="box2"></div>
<button id="box3" onclick="focal()" onmouseover="darkener(this)" onmouseout="lighten(this)"></button>
<p id="transword" onmouseover="darken(this)">TRANSLATOR</p>
<textarea id="engText"></textarea>
<textarea id="zuluText"></textarea>
<b><p1 id="eng">ENGLISH</p1></b>
<b><p1 id="zulu">ZULU</p1></b>
<button id="buttonTranslate" onmouseover="darken(this)" onmouseout="lighten(this)">TRANSLATE</button>
<style>
#buttonTranslate {
	position: absolute;
	top: 285px;
	left: 60px;
	background: #2330C3;
	width: 464px;
	height: 25px;
	opacity: 0.8;
	font-family: 'Arial';
    	font-size: 16px;
	color: #fff;
	border:none;
	visibility: hidden;
}
textarea{
	width: 200px;
	height: 150px;
	resize: none;
	font-family: 'Tahoma';
	opacity: 0.5;
	background: white;
	border: none;
	color: black;
	visibility: hidden;
}
#zuluText{
	position: absolute;
	top: 120px;
	left: 320px;
}
#engText {
	position: absolute;
	top: 120px;
	left: 60px;
}
#output1{
	position: absolute;
	top: 540px;
	left: 1080px;
	font-size: 14px;
	width: 270px;
	color: #fff;
}
.pass{
	position: absolute;
	width: 200px;
	height:20px;
	top: 390px;
	left: 1080px;
	opacity: 0.7;
	filter: alpha(opacity=70);
}
#sub:hover {
    border: none;
    background:blue;
    box-shadow: 0px 0px 1px #777;
}
#sign:hover {
    border: none;
    background:red;
    box-shadow: 0px 0px 1px #777;
}
#sign {
    	position: absolute;
	top: 485px;
	left: 1080px;
    	width: 202px;
    	height:40px;
    	background-color: #FA4F4F;
    	-moz-border-radius: 5px;
    	-webkit-border-radius: 5px;
    	border-radius:6px;
    	color: #fff;
    	font-family: 'Arial';
    	font-size: 20px;
    	text-decoration: none;
    	cursor: pointer;
    	border:none;
}
#sub {
    	position: absolute;
	top: 435px;
	left: 1080px;
    	width: 202px;
    	height:40px;
    	background-color: #4332FC;
    	-moz-border-radius: 5px;
    	-webkit-border-radius: 5px;
    	border-radius:6px;
    	color: #fff;
    	font-family: 'Arial';
    	font-size: 20px;
    	text-decoration: none;
    	cursor: pointer;
    	border:none;
}
#Login{
	position:absolute;
	top: 280px;
	left: 1080px;
}
#Password{
	position: absolute;
	top: 350px;
	left: 1080px;
}
p{
	font-family: 'Arial';
}
#eng {
	position: absolute;
	top: 100px;
	left: 60px;
	color: white;
	font-family: 'Tahoma';
	visibility: hidden;
}
#zulu {
	position: absolute;
	top:  100px;
	left: 322px;
	color: white;
	font-family: 'Tahoma';
	visibility: hidden;
}
.boxed{
	position: absolute;
	width: 200px;
	height:20px;
	top: 320px;
	left: 1080px;
	opacity: 0.7;
	filter: alpha(opacity=70);
}
#box {
	position: absolute;
	top: 265px;
	left: 1050px;
	opacity: 0.4;
	background: blue;
	width: 270px;
	height: 275px;
	filter: alpha(opacity=40);
}
#box2 {
	position: absolute;
	top: 20px;
	left: 0px;
	background: #28919F;
	width: 100%;
	height: 65px;
}
#transword {
	font-family: 'Arial';
    	font-size: 20px;
	color: #fff;
	position: absolute;
	left: 110px;
	top: 20px;
}
#box3 {
	position: absolute;
	top: 20px;
	left: 50px;
	background: #FA9E1D;
	width: 250px;
	height: 65px;
	opacity: 0.8;
	font-family: 'Arial';
    	font-size: 20px;
	color: #fff;
	border:none;
	-webkit-transition: height 1s, width 1s;
    	transition: height 1s, width 1s;
	
}
body{
	background-image: url("intro2.png");
	background-size: 100%;
    padding: 0;
}
</style>
<script>
var validUser = false;
var waiter;
var counter = 0;
var open = false;
function login(){
	var user = username.value;
	var pass = password.value;
	var validUser = false;
	if(user=="Guest" && pass=="54321"){
		nextWindow();
	}
	else if(user=="" && pass==""){
	}
	else {
		document.getElementById("output1").innerHTML = "Username or password is incorrect";
		alert("Access Denied");
	}
}
function nextWindow(){
	window.location.assign("game/level1.html");
}
function focal() {
		document.getElementById("box3").style.height ="300px";
		document.getElementById("box3").style.width ="500px";
		var  waiter = setInterval(function () {MyFocus()}, 1000);
}
function MyFocus(){
	document.getElementById("engText").style.visibility ="visible";
	document.getElementById("zuluText").style.visibility ="visible";
	document.getElementById("eng").style.visibility ="visible";
	document.getElementById("zulu").style.visibility ="visible";
	document.getElementById("buttonTranslate").style.visibility ="visible";
	open = true;
	window.clearInterval(waiter);
}
function lostfocal() {
	document.getElementById("box3").style.height ="65px";
	document.getElementById("box3").style.width ="250px";
	document.getElementById("engText").style.visibility ="hidden";
	document.getElementById("zuluText").style.visibility ="hidden";
}
function darkener(x){
	if(!open)
	x.style.opacity = "1";
}
function darken(x) {
	x.style.opacity = "1";
}
function lighten(x) {
	x.style.opacity="0.8";
}
</script>
</body>
</html>