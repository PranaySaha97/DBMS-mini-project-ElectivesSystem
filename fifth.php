<?php
$res=mysqli_connect("localhost","root","root","electives");
$query="SELECT `subcode`,`subject`,`type` FROM `fifth`";
$query_run=mysqli_query($res,$query);


?>

<!DOCTYPE html>
<html>
<head>
    <title>5th Sem</title>
</head>
<body>
<h1>Subjects Available:</h1>

<?php
while($query_row=mysqli_fetch_assoc($query_run)){
    $subcode=$query_row["subcode"];
    $subject=$query_row["subject"];
    $type=$query_row["type"];
    
    if($type=="open"){

        echo "<br>Open Elective: ".$subcode. "-->".$subject;
    
    }else if($type=="prof"){

        echo "<br>Professional Elective: ".$subcode. "-->".$subject;
    
    }
}

?>

<h2><u>Select your subjects: </u></h2><br>

<form action="fifth.php" method="POST">
YOUR USN: <input type="text" name="usn"/><br><br>
OPEN ELECTIVE Subject Code: <input type="text" name="open"/><br><br>
PROFESSIONAL ELECTIVE Subject Code: <input type="text" name="prof"/><br><br>    
<input type="submit" value="Submit" name="submit"/>
</form>
</body>
</html>

<?php
error_reporting(0);
$usn=$_POST["usn"];
$open=$_POST["open"];
$prof=$_POST["prof"];

echo $usn.$open.$prof;
$queryINS= "INSERT INTO `elective` VALUES ('".$usn."','".$open."','".$prof."')";
if(mysqli_query($res,$queryINS) && isset($_POST["submit"])){
    header("Location: ThankYou.php");
    
}

?>