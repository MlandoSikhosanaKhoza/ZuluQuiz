<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>talkZulu Profile</title>
    </head>
    <body>
	<div id="banner">
		<button id="Home" class="banner1">HOME</button>
		<button id="Notes" class="banner1">NOTES</button>
		<button id="Books" class="banner1">BOOKS</button>
	</div>
	<p id="pStart">LEVEL 1...<br><br>
        HOW TO GREET IN ISIZULU:<br><br>
        Example:<br><br>
        Njabulo:    Sawubona[Hello].<br>
        Jabulani:   Yebo[Yes].<br>
        Njabulo:    Unjani?[How are you?]<br>
        Jabulani:   Ngiyaphila.[I am fine]<br>
    </p>
		<p id="pLearn">...</p>
		<p id="pLanguage">...</p>
		<p id="pCommon">...</p>
		<p id="pVocab">TRANSLATION<br><br>
        Z: Cha<br>
        E: No<br></p>
		<p id="pStat">...</p>
		<p id="pSkip">...</p>
		<p id="pComprehension">...</p>
	<div id="dialog">
		<button id="Start" class="Homie" onmouseover="timing=setInterval(function(){showStart()},1000);" 
        onmouseout="hideStart()" onclick="window.location.href='GamePlay.php'">START</button>
		<button id="Learn" class="Homie" onmouseover="timing1=setInterval(function(){showLearn()},1000);" onmouseout="hideLearn()">LEARN</button>
		<button id="Language" class="Homie" onmouseover="timing2=setInterval(function(){showLang()},1000);" onmouseout="hideLang()">language</button>
		<button id="Common" class="Homie" onmouseover="timing3=setInterval(function(){showCommon()},1000);" 
		onmouseout="hideCommon()">common</button>
		<button id="Vocab" class="Homie" onmouseover="timing4=setInterval(function(){showVocab()},1000);" onmouseout="hideVocab()">VOCAB</button>
		<button id="stats" class="Homie" onmouseover="timing5=setInterval(function(){showStats()},1000);" onmouseout="hideStats()">self-statistics</button>
		<button id="skip" class="Homie" onmouseover="timing6=setInterval(function(){showSkip()},1000);" onmouseout="hideSkip()">SKIP</button>
		<button id="compre" class="Homie" 
		onmouseover="timing7=setInterval(function(){showComprehension()},1000);" 
		onmouseout="hideComprehension()">comprehension</button>
	</div>
<style>
p{
	font-family: 'Century';
	visibility: hidden;
}
#pComprehension{
	position: absolute;
	top: 68%;
	left: 80%;
	height: 30%;
	width: 9%;
}
#pSkip{
	position: absolute;
	top: 68%;
	left: 17%;
	height: 30%;
	width: 9%;
}
#pStat{
	position: absolute;
	top: 50%;
	left: 67%;
	height: 30%;
	width: 9%;
}
#pVocab{
	position: absolute;
	top: 50%;
	left: 41%;
	height: 30%;
	width: 9%;
}
#pCommon{
	position: absolute;
	top: 50%;
	left: 11%;
	height: 30%;
	width: 30%;
}
#pLanguage{
	position: absolute;
	top: 34%;
	left: 45%;
	height: 30%;
	width: 30%;
}
#pLearn{
	position: absolute;
	top: 33%;
	left: 10%;
	height: 30%;
	width: 30%;
}
#pStart{
	position: absolute;
	top: 14%;
	left: 30%;
	height: 30%;
	width: 30%;
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
#compre{
	background: #002060;
	top: 9px;
	font-size: 48px;
	width: 49.9%;
}
#skip{
	background: #215968;
	top: 14px;
	font-size: 72px;
	width: 49.8%;
}
#stats{
	background: red;
	top: 10px;
	font-size: 30px;
	width: 49.4%;
}
#Vocab{
	background: #E46C0A;
	top: 12px;
	font-size: 35px;
	width: 10%;
}
#Common{
	background: #4F81BD;
	top: 10px;
	font-size: 30px;
	width: 40%;
}
#Language{
	background: #604A7B;
	top: 7px;
	font-size: 35px;
	width: 69.7%;
}
#Learn{
	background: #77933C;
	top: 5px;
	font-size: 27px;
	width: 30%;
}
#Start{
	background: #953735;
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
	width: 10%;
	height: 100%;
}
body{
	background: #A9D7E4;
}
button{
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
</style>
<script>
function showStart(){
	document.getElementById("pStart").style.visibility = "visible";
}
function hideStart(){
	clearTimeout(timing);
	document.getElementById("pStart").style.visibility = "hidden";
}
function showLearn(){
	document.getElementById("pLearn").style.visibility = "visible";
}
function hideLearn(){
	clearTimeout(timing1);
	document.getElementById("pLearn").style.visibility = "hidden";
}
function showLang(){
	document.getElementById("pLanguage").style.visibility = "visible";
}
function hideLang(){
	clearTimeout(timing2);
	document.getElementById("pLanguage").style.visibility = "hidden";
}
function showCommon(){
	document.getElementById("pCommon").style.visibility = "visible";
}
function hideCommon(){
	clearTimeout(timing3);
	document.getElementById("pCommon").style.visibility = "hidden";
}
function showVocab(){
	document.getElementById("pVocab").style.visibility = "visible";
}
function hideVocab(){
	clearTimeout(timing4);
	document.getElementById("pVocab").style.visibility = "hidden";
}
function showStats(){
	document.getElementById("pStat").style.visibility = "visible";
}
function hideStats(){
	clearTimeout(timing5);
	document.getElementById("pStat").style.visibility = "hidden";
}
function showSkip(){
	document.getElementById("pSkip").style.visibility = "visible";
}
function hideSkip(){
	clearTimeout(timing6);
	document.getElementById("pSkip").style.visibility = "hidden";
}
function showComprehension(){
	document.getElementById("pComprehension").style.visibility = "visible";
}
function hideComprehension(){
	clearTimeout(timing7);
	document.getElementById("pComprehension").style.visibility = "hidden";
}
</script>
    </body>
</html>