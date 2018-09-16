<!DOCTYPE html>
<html>
<head>
   
    <title>Edit</title>
   
</head>
<body>
<h1><u>EDIT YOUR RESPONSE</u></h1>
<form action="edit.php" method="POST">
YOUR USN: <input type="text" name="usn"/><br><br>
OPEN ELECTIVE Subject Code: <input type="text" name="open"/><br><br>
PROFESSIONAL ELECTIVE Subject Code: <input type="text" name="prof"/><br><br>    
<input type="submit" value="Submit" name="submit"/>
</form>
</body>
</html>

<?php
 error_reporting(0);
 $res=mysqli_connect("localhost","root","root","electives");
$usn=$_POST["usn"];
$open=$_POST["open"];
$prof=$_POST["prof"];

$queryUP= "UPDATE `elective` SET `open`='".$open."',`prof`='".$prof."' WHERE `usn`='".$usn."'";

if(mysqli_query($res,$queryUP) && isset($_POST["submit"])){
    header("Location: ThankYou.php");
    
}

?>