<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Level 1: Greetings</title>
    </head>
    <body>
	<div id="banner">
		<button id="Home" class="banner1">HOME</button>
		<button id="Notes" class="banner1">NOTES</button>
		<button id="Books" class="banner1">BOOKS</button>
	</div>
	<div id="dialog">
	<img src="picA.png" onclick="document.getElementById('R1').checked=true;" id="PA" onmouseout="showImageA()" style="position: absolute; left: 500px; top: 100px;
	width: 100px; height: 100px;"></img>
	<img src="picB.png" onclick="document.getElementById('R2').checked=true;" id="PB" onmouseout="showImageB()" style="position: absolute;left: 620px;top: 100px;
	width: 100px; height: 100px;"></img>
	<img src="picC.png" onclick="document.getElementById('R3').checked=true;" id="PC" onmouseout="showImageC()" style="position: absolute;left: 740px;top: 100px;
	width: 100px; height: 100px;"></img>
	<img src="a.png" onmouseover="hideMe(this)" id="picA" class="picAns" style="position: absolute; left: 500px; top: 100px;
	width: 100px; height: 100px;"></img>
	<img src="b.png" onmouseover="hideMe(this)" id="picB" class="picAns" style="position: absolute;left: 620px;top: 100px;
	width: 100px; height: 100px;"></img>
	<img src="c.png" onmouseover="hideMe(this)" id="picC" class="picAns" style="position: absolute;left: 740px;top: 100px;
	width: 100px; height: 100px;"></img>
	<p id="pLevel1">Level 1: GREETINGS</p>
	<p2 id="question">What is Sawubona in Zulu?</p2>
	<input type="text" id="YourAnswer"></input>
	<button onclick="next1()" id="buttonNext">NEXT</button>
	<button id="buttonPrevious" onclick="previous1()">PREVIOUS</button>
	<form id="buttonRadio">
	<input type="radio" id="R1" name="groupYA" value="R1"></input><p3 id="R11"></p3><br><br>
	<input type="radio" id="R2" name="groupYA" value="R2"></input><p3 id="R22"></p3><br><br>
	<input type="radio" id="R3" name="groupYA" value="R3"></input><p3 id="R33"></p3><br><br>
	</form>
	<p id="number3">1</p>
	<audio id="playSound" src="sawubona.mp3" controls>
	</audio>
	<audio id="playSound1" src="yebo.mp3" controls>
	</audio>
	<audio id="playSound2" src="unjani.mp3" controls>
	</audio>
	<audio id="playSound3" src="NGIYAPHILA.mp3" controls>
	</audio>
	</div>
<style>
.banner1{
	font-family: 'Calibri';
	font-size: 20px;
	font-weight: bold;
	float: left;
	width: 10%;
	height: 100%;
}
#Home{
	background: white;
	border: none;
	opacity: 0.8;
}
#Home:hover{
	opacity: 1;
}
#Notes{
	background: #17375E;
	border: none;
	color: white;
	opacity: 0.7;
}
#Notes:hover{
	opacity: 1;
}
#Books{
	background: #10253F;
	border: none;
	color: white;
	opacity: 0.7;
}
#Books:hover{
	opacity: 1;
}
.picAns {
z-index: 1;
}
.picAns:hover{
z-index: -1;
}
audio{
	position: absolute;
	top: 55%;
	left: 10px;
	width: 10%;
	visibility: hidden;
}
#number3 {
	position: absolute;
	top: -200px;
	left: 50px;
	font-size: 250px;
}
#buttonRadio {
	position: absolute;
	top: 45%;
	left: 500px;
}
#YourAnswer {
	position: absolute;
	left: 10px;
	right: 10px;
	top: 75%;
	height: 30px;
	width: 98%;
	font-size: 20px;
}
p2 {
	font-family: 'Century';
}
p {
	font-family: 'Aharoni';
}
#question {
	position: absolute;
	top: 12%;
	left: 500px;
	font-size: 20px;
}
#pLevel1 {
	font-size: 40px;
	position: absolute;
	left: 500px;
	top: -30px;
}
#buttonNext {
	position: absolute;
	right: 10px;
	border: none;
	background: #28919F;
	color: white;
	bottom: 20px;
	height: 40px;
	width: 45%;
	font-size: 25px;
	opacity: 0.7;
}
#buttonNext:hover {
	opacity: 1;
}
#buttonPrevious {
	position: absolute;
	left: 10px;
	border: none;
	background: #28919F;
	color: white;
	bottom: 20px;
	height: 40px;
	width: 45%;
	font-size: 25px;
	opacity: 0.7;
}
#buttonPrevious:hover {
	opacity: 1;
}
#dialog {
	background: white;
	position: absolute;
	top: 100px;
	left: 0px;
	height: 70%;
	width: 100%;
}
#banner {
	position: absolute;
	top: 20px;
	left: 0px;
	background: #28919F;
	height: 65px;
	width: 100%;
}
body {
	background: #A9D7E4;
}
</style>
<script>
var a=1;
var result=0;
var answer;
//Visibility
document.getElementById('picA').style.visibility ="hidden";
document.getElementById('picB').style.visibility ="hidden";
document.getElementById('picC').style.visibility ="hidden";
document.getElementById('PA').style.visibility ="hidden";
document.getElementById('PB').style.visibility ="hidden";
document.getElementById('PC').style.visibility ="hidden";
document.getElementById('playSound').style.visibility ="hidden";
document.getElementById('YourAnswer').style.visibility ="hidden";
document.getElementById('question').style.visibility ="visible";
document.getElementById('R11').style.visibility ="visible";
document.getElementById('R22').style.visibility ="visible";
document.getElementById('R33').style.visibility ="visible";
//Question
document.getElementById('question').innerHTML ="Translate: Sawubona.";
document.getElementById('R11').innerHTML ="Hello.";
document.getElementById('R22').innerHTML ="Goodbye.";
document.getElementById('R33').innerHTML ="How are you?";
function commitEXE(){
	a--;
	if(a==1){
		//Answer
		if(document.getElementById('R1').checked) {
			alert("Correct");
			result++;
		} else{
			alert("Incorrect");
		}
	}
	if(a==2){
		//Answer
		if(document.getElementById('R2').checked) {
			alert("Correct");
			result++;
		} else{
			alert("Incorrect");
		}
	}
	if(a==3) {
		var ya = YourAnswer.value;
		if(ya.toUpperCase()=="SAWUBONA"){
			alert("Correct");
			result++;
		} else{
			alert("Incorrect");
		}
		
	}
	if(a==4){
		//Answer
		if(document.getElementById('R3').checked) {
			alert("Correct");
			result++;
		} else{
			alert("Incorrect");
		}
	}
	if(a==5) {
		var ya = YourAnswer.value;
		if(ya.toUpperCase()=="YEBO"){
			alert("Correct");
			result++;
		} else{
			alert("Incorrect");
		}
	}
	if(a==6) {
		var ya = YourAnswer.value;
		if(ya.toUpperCase()=="UNJANI"){
			alert("Correct");
			result++;
		} else{
			alert("Incorrect");
		}
	}
	if(a==7) {
		var ya = YourAnswer.value;
		if(ya.toUpperCase()=="NGIYAPHILA"){
			alert("Correct");
			result++;
		} else{
			alert("Incorrect");
		}
	}
	if(a==8){
		//Answer
		if(document.getElementById('R2').checked) {
			alert("Correct");
			result++;
		} else{
			alert("Incorrect");
		}
	}
	if(a==9){
		//Answer
		if(document.getElementById('R3').checked) {
			alert("Correct");
			result++;
		} else{
			alert("Incorrect");
		}
	}
	if(a==10){
		//Answer
		if(document.getElementById('R3').checked) {
			alert("Correct");
			result++;
		} else{
			alert("Incorrect");
		}
	}
	a++;
	if(a==10){
		alert("Your result is "+ result +"/10");
	}
}
function next1() {
	if(a<10){
	a++;
	document.getElementById('number3').innerHTML = a;
	}
	commitEXE();
	nextQuestion();
	YourAnswer.value = "";
}
function previous1(){
	if(a>1) {
	a--;
	document.getElementById('number3').innerHTML = a;
	}
}
function showImageA(){
	document.getElementById('picA').style.visibility = 'visible';
}
function showImageB(){
	document.getElementById('picB').style.visibility = 'visible';
}
function showImageC(){
	document.getElementById('picC').style.visibility = 'visible';
}
function hideMe(x){
	x.style.visibility = 'hidden';
}
function nextQuestion(){
	if(a==2){
		//Visibility
		document.getElementById('picA').style.visibility ="hidden";
		document.getElementById('picB').style.visibility ="hidden";
		document.getElementById('picC').style.visibility ="hidden";
		document.getElementById('PA').style.visibility ="hidden";
		document.getElementById('PB').style.visibility ="hidden";
		document.getElementById('PC').style.visibility ="hidden";
		document.getElementById('playSound').style.visibility ="hidden";
		document.getElementById('YourAnswer').style.visibility ="hidden";
		document.getElementById('question').style.visibility ="visible";
		document.getElementById('R11').style.visibility ="visible";
		document.getElementById('R22').style.visibility ="visible";
		document.getElementById('R33').style.visibility ="visible";
		document.getElementById('R1').style.visibility ="visible";
		document.getElementById('R2').style.visibility ="visible";
		document.getElementById('R3').style.visibility ="visible";
		//Question
		document.getElementById('question').innerHTML ="Translate: Unjani?.";
		document.getElementById('R11').innerHTML ="I am fine";
		document.getElementById('R22').innerHTML ="How are you?";
		document.getElementById('R33').innerHTML ="Are you happy?";	
	}
	if(a==3){
		playSound.play();
		//Visibility
		document.getElementById('picA').style.visibility ="hidden";
		document.getElementById('picB').style.visibility ="hidden";
		document.getElementById('picC').style.visibility ="hidden";
		document.getElementById('PA').style.visibility ="hidden";
		document.getElementById('picA').src ="a.png";
		document.getElementById('PB').style.visibility ="hidden";
		document.getElementById('picB').src ="b.png";
		document.getElementById('PC').style.visibility ="hidden";
		document.getElementById('picC').src ="c.png";
		document.getElementById('playSound').style.visibility ="hidden";
		document.getElementById('YourAnswer').style.visibility ="visible";
		document.getElementById('question').style.visibility ="visible";
		document.getElementById('R11').style.visibility ="hidden";
		document.getElementById('R22').style.visibility ="hidden";
		document.getElementById('R33').style.visibility ="hidden";
		document.getElementById('R1').style.visibility ="hidden";
		document.getElementById('R2').style.visibility ="hidden";
		document.getElementById('R3').style.visibility ="hidden";
		//Question
		document.getElementById('question').innerHTML ="Spell the following...";
		document.getElementById('R11').innerHTML ="";
		document.getElementById('R22').innerHTML ="";
		document.getElementById('R33').innerHTML ="";
		document.getElementById('YourAnswer').focus();	
	}
	if(a==4){
		//Visibility
		document.getElementById('picA').style.visibility ="visible";
		document.getElementById('picB').style.visibility ="visible";
		document.getElementById('picC').style.visibility ="visible";
		document.getElementById('PA').style.visibility ="visible";
		document.getElementById('picA').src ="a.png";
		document.getElementById('PB').style.visibility ="visible";
		document.getElementById('picB').src ="b.png";
		document.getElementById('PC').style.visibility ="visible";
		document.getElementById('picC').src ="c.png";
		document.getElementById('playSound').style.visibility ="hidden";
		document.getElementById('YourAnswer').style.visibility ="hidden";
		document.getElementById('question').style.visibility ="visible";
		document.getElementById('R11').style.visibility ="visible";
		document.getElementById('R22').style.visibility ="visible";
		document.getElementById('R33').style.visibility ="visible";
		document.getElementById('R1').style.visibility ="visible";
		document.getElementById('R2').style.visibility ="visible";
		document.getElementById('R3').style.visibility ="visible";
		//Question
		document.getElementById('question').innerHTML ="Select: Umfana";
		document.getElementById('R11').innerHTML ="A";
		document.getElementById('R22').innerHTML ="B";
		document.getElementById('R33').innerHTML ="C";	
	}
	if(a==5){
		playSound1.play();
		//Visibility
		document.getElementById('picA').style.visibility ="hidden";
		document.getElementById('picB').style.visibility ="hidden";
		document.getElementById('picC').style.visibility ="hidden";
		document.getElementById('PA').style.visibility ="hidden";
		document.getElementById('picA').src ="a.png";
		document.getElementById('PB').style.visibility ="hidden";
		document.getElementById('picB').src ="b.png";
		document.getElementById('PC').style.visibility ="hidden";
		document.getElementById('picC').src ="c.png";
		document.getElementById('playSound').style.visibility ="hidden";
		document.getElementById('YourAnswer').style.visibility ="visible";
		document.getElementById('question').style.visibility ="visible";
		document.getElementById('R11').style.visibility ="hidden";
		document.getElementById('R22').style.visibility ="hidden";
		document.getElementById('R33').style.visibility ="hidden";
		document.getElementById('R1').style.visibility ="hidden";
		document.getElementById('R2').style.visibility ="hidden";
		document.getElementById('R3').style.visibility ="hidden";
		//Question
		document.getElementById('question').innerHTML ="Spell...";
		document.getElementById('R11').innerHTML ="";
		document.getElementById('R22').innerHTML ="";
		document.getElementById('R33').innerHTML ="";
		document.getElementById('YourAnswer').focus();	
	}
	if(a==6){
		playSound2.play();
		//Visibility
		document.getElementById('picA').style.visibility ="hidden";
		document.getElementById('picB').style.visibility ="hidden";
		document.getElementById('picC').style.visibility ="hidden";
		document.getElementById('PA').style.visibility ="hidden";
		document.getElementById('picA').src ="a.png";
		document.getElementById('PB').style.visibility ="hidden";
		document.getElementById('picB').src ="b.png";
		document.getElementById('PC').style.visibility ="hidden";
		document.getElementById('picC').src ="c.png";
		document.getElementById('playSound').style.visibility ="hidden";
		document.getElementById('YourAnswer').style.visibility ="visible";
		document.getElementById('question').style.visibility ="visible";
		document.getElementById('R11').style.visibility ="hidden";
		document.getElementById('R22').style.visibility ="hidden";
		document.getElementById('R33').style.visibility ="hidden";
		document.getElementById('R1').style.visibility ="hidden";
		document.getElementById('R2').style.visibility ="hidden";
		document.getElementById('R3').style.visibility ="hidden";
		//Question
		document.getElementById('question').innerHTML ="Spell...";
		document.getElementById('R11').innerHTML ="";
		document.getElementById('R22').innerHTML ="";
		document.getElementById('R33').innerHTML ="";
		document.getElementById('YourAnswer').focus();	
	}
	if(a==7){
		playSound3.play();
		//Visibility
		document.getElementById('picA').style.visibility ="hidden";
		document.getElementById('picB').style.visibility ="hidden";
		document.getElementById('picC').style.visibility ="hidden";
		document.getElementById('PA').style.visibility ="hidden";
		document.getElementById('picA').src ="a.png";
		document.getElementById('PB').style.visibility ="hidden";
		document.getElementById('picB').src ="b.png";
		document.getElementById('PC').style.visibility ="hidden";
		document.getElementById('picC').src ="c.png";
		document.getElementById('playSound').style.visibility ="hidden";
		document.getElementById('YourAnswer').style.visibility ="visible";
		document.getElementById('question').style.visibility ="visible";
		document.getElementById('R11').style.visibility ="hidden";
		document.getElementById('R22').style.visibility ="hidden";
		document.getElementById('R33').style.visibility ="hidden";
		document.getElementById('R1').style.visibility ="hidden";
		document.getElementById('R2').style.visibility ="hidden";
		document.getElementById('R3').style.visibility ="hidden";
		//Question
		document.getElementById('question').innerHTML ="Spell...";
		document.getElementById('R11').innerHTML ="";
		document.getElementById('R22').innerHTML ="";
		document.getElementById('R33').innerHTML ="";
		document.getElementById('YourAnswer').focus();
	}
	if(a==8){
		//Visibility
		document.getElementById('picA').style.visibility ="visible";
		document.getElementById('picB').style.visibility ="visible";
		document.getElementById('picC').style.visibility ="visible";
		document.getElementById('PA').style.visibility ="visible";
		document.getElementById('picA').src ="shoe.png";
		document.getElementById('PB').style.visibility ="visible";
		document.getElementById('picB').src ="shirt.png";
		document.getElementById('PC').style.visibility ="visible";
		document.getElementById('picC').src ="pants.png";
		document.getElementById('YourAnswer').style.visibility ="hidden";
		document.getElementById('question').style.visibility ="visible";
		document.getElementById('R11').style.visibility ="visible";
		document.getElementById('R22').style.visibility ="visible";
		document.getElementById('R33').style.visibility ="visible";
		document.getElementById('R1').style.visibility ="visible";
		document.getElementById('R2').style.visibility ="visible";
		document.getElementById('R3').style.visibility ="visible";
		//Question
		document.getElementById('question').innerHTML ="Select: Ihembe";
		document.getElementById('R11').innerHTML ="A";
		document.getElementById('R22').innerHTML ="B";
		document.getElementById('R33').innerHTML ="C";	
	}
	if(a==9){
		//Visibility
		document.getElementById('picA').style.visibility ="hidden";
		document.getElementById('picB').style.visibility ="hidden";
		document.getElementById('picC').style.visibility ="hidden";
		document.getElementById('PA').style.visibility ="hidden";
		document.getElementById('PB').style.visibility ="hidden";
		document.getElementById('PC').style.visibility ="hidden";
		document.getElementById('playSound').style.visibility ="hidden";
		document.getElementById('YourAnswer').style.visibility ="hidden";
		document.getElementById('question').style.visibility ="visible";
		document.getElementById('R11').style.visibility ="visible";
		document.getElementById('R22').style.visibility ="visible";
		document.getElementById('R33').style.visibility ="visible";
		document.getElementById('R1').style.visibility ="visible";
		document.getElementById('R2').style.visibility ="visible";
		document.getElementById('R3').style.visibility ="visible";
		//Question
		document.getElementById('question').innerHTML ="Translate: Ngiyaphila.";
		document.getElementById('R11').innerHTML ="Hello";
		document.getElementById('R22').innerHTML ="How are you";
		document.getElementById('R33').innerHTML ="I am fine";	
	}
	if(a==10){
		//Visibility
		document.getElementById('picA').style.visibility ="hidden";
		document.getElementById('picB').style.visibility ="hidden";
		document.getElementById('picC').style.visibility ="hidden";
		document.getElementById('PA').style.visibility ="hidden";
		document.getElementById('PB').style.visibility ="hidden";
		document.getElementById('PC').style.visibility ="hidden";
		document.getElementById('playSound').style.visibility ="hidden";
		document.getElementById('YourAnswer').style.visibility ="hidden";
		document.getElementById('question').style.visibility ="visible";
		document.getElementById('R11').style.visibility ="visible";
		document.getElementById('R22').style.visibility ="visible";
		document.getElementById('R33').style.visibility ="visible";
		document.getElementById('R1').style.visibility ="visible";
		document.getElementById('R2').style.visibility ="visible";
		document.getElementById('R3').style.visibility ="visible";
		//Question
		document.getElementById('question').innerHTML ="Translate: Hello";
		document.getElementById('R11').innerHTML ="Unjani?";
		document.getElementById('R22').innerHTML ="Uyahlanya";
		document.getElementById('R33').innerHTML ="Sawubona";	
	}
}
</script>
</body>
</html>