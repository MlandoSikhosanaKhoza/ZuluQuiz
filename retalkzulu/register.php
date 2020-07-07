<!doctype html>
<html>
<title>
Sign Up
</title>
<body>
<p id="lock"> 
</p>
<p id="l2"> 
</p>
<p id="l3"> 
</p>
<p id="l4"> 
</p>
<p id="l5"> 
</p>
<p id="l6"> 
</p>
<p id="l7"> 
</p>
<p id="l8"> 
</p>
<p id="name">
Name:
</p>
<p id="surname">
Surname:
</p>
<p id="gender">
Gender:
</p>
<p id="Email">
E-mail:
</p>
<p2 id="Male">
Male
</p2>
<p2 id="Female">
Female
</p2>
<p id="Username">
Username:
</p>
<p id="Password">
Password:
</p>
<p id="confirmPassword">
Confirm Password:
</p>
<p id="confirmEmail">
Confirm E-mail:
</p>
    <form action="addUser.php" method="get">
<input type="text" name="txtName" id="txtName"></input>
<input type="text" name="txtSurname" id="txtSurname"></input>
<input type="radio" name="genders" value="male" id="GM"></input>
<input type="radio" name="genders" value="female" id="GF"></input>
<input type="text" name="txtUsername" id="txtUsername"></input>
<input type="password" name="txtPassword" id="txtPassword"></input>
<input type="password" id="txtConfirmPassword"></input>
<input type="text" name="txtEmail" id="txtEmail"></input>
<input type="text" id="txtConfirmEmail"></input>
<input type="submit" value="NEXT" id="Next"></input>
        </form>
<script>

</script>
<style>
#lock {
	position: absolute;
	top: 120px;
	left: 805px;
	font-size: 14px;
}
#l2 {
	position: absolute;
	top: 170px;
	left: 805px;
	font-size: 14px;
}
#l3 {
	position: absolute;
	top: 240px;
	left: 805px;
	font-size: 14px;
}
#l4 {
	position: absolute;
	top: 281px;
	left: 805px;
	font-size: 14px;
}
#l5 {
	position: absolute;
	top: 338px;
	left: 805px;
	font-size: 14px;
}
#l6 {
	position: absolute;
	top: 406px;
	left: 805px;
	font-size: 14px;
}
#l7 {
	position: absolute;
	top: 460px;
	left: 805px;
	font-size: 14px;
}
#l8 {
	position: absolute;
	top: 536px;
	left: 805px;
	font-size: 14px;
}
body {
	background-image: url("theme2.png");
	background-repeat: no-repeat;
	width: 100%;
	height: 80%;
	opacity: 0.5;
}
#Next {
    	position: absolute;
	top: 605px;
	left: 516px;
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
#Next:hover {
    border: none;
    background:blue;
    opacity: 2;
    box-shadow: 0px 0px 1px #777;
}
#Password{
	position: absolute;
	top: 315px;
	left: 340px;
}
#confirmPassword{
	position: absolute;
	top: 355px;
	left: 340px;
	width: 95px;
}
#Email{
	position: absolute;
	top: 435px;
	left: 340px;
	width: 95px;
}
#confirmEmail{
	position: absolute;
	top: 485px;
	left: 340px;
	width: 95px;
}
#txtUsername{
	position: absolute;
	top: 287px;
	left: 465px;
	height: 20px;
	width: 250px;
	font-size: 20px;
}
#txtPassword{
	position: absolute;
	top: 341px;
	left: 465px;
	height: 20px;
	width: 250px;
	font-size: 20px;
}
#txtConfirmPassword{
	position: absolute;
	top: 411px;
	left: 465px;
	height: 20px;
	width: 250px;
	font-size: 20px;
}
#txtEmail{
	position: absolute;
	top: 463px;
	left: 465px;
	height: 20px;
	width: 250px;
	font-size: 20px;
}
#txtConfirmEmail{
	position: absolute;
	top: 540px;
	left: 465px;
	height: 20px;
	width: 250px;
	font-size: 20px;
}
p {
font-family: 'arial';
font-size: 25px;
}
#name{
position: absolute;
top: 100px;
left: 340px;
}
#Username{
position: absolute;
top: 260px;
left: 340px;
}
#txtName{
	position: absolute;
	top: 125px;
	left: 465px;
	height: 20px;
	width: 250px;
	font-size: 20px;
}
#surname{
position: absolute;
top: 150px;
left: 340px;
}
#txtSurname{
	position: absolute;
	top: 177px;
	left: 465px;
	height: 20px;
	width: 250px;
	font-size: 20px;
}
#gender{
	position: absolute;
	top: 200px;
	left: 340px;
}
#Male{
	font-family: 'arial';
	font-size: 16px;
	position: absolute;
	top: 233px;
	left: 485px;
}
#Female{
	font-family: 'arial';
	font-size: 16px;
	position: absolute;
	top: 260px;
	left: 485px;
}
#GM{
	position: absolute;
	top: 233px;
	left: 460px;
}
#GF{
	position: absolute;
	top: 260px;
	left: 460px;
}

</style>
</body>
</html>