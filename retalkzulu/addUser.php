
<?php
$servername = "localhost:3306";
$username = "root";
$password = "Ml@nl)0";
$dbname = "talkZulu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$validUser=TRUE;
if(empty($_POST["txtName"])){
    $validUser=FALSE;
}
if(empty($_POST["txtSurname"])){
    $validUser=FALSE;
}
if(empty($_POST["txtUsername"])){
    $validUser=FALSE;
}
if(empty($_POST["txtPassword"])){
    $validUser=FALSE;
}
if(empty($_POST["txtEmail"])){
    $validUser=FALSE;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if($_POST["txtPassword"] == $_POST["txtConfirmPassword"]
&& $_POST["txtEmail"]== $_POST["txtConfirmEmail"] && validUser==TRUE){
$sql = "INSERT INTO Users (NameOfUser, Surname, Username, Password, Email)
VALUES ('".$_GET["txtName"]."', '"
          .$_GET["txtSurname"]."', '"
          .$_GET["txtUsername"]."','"
          .md5($_GET["txtPassword"])."','"
          .$_GET["txtEmail"]."')";

if ($conn->query($sql) === TRUE) {
    header("location:successfulSignUp.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
} else{
    header("location:register.php"); 
}
}
$conn->close();
?>