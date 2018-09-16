<html>
<head>
<title>Subject Selection</title>
</head>

<body>
<center>
<form action="SubSelect.php" method="GET">
SEMESTER: <select name="sem">
            <option value='5'>5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
    </select><br><br>
    <input type="submit" value="Confirm" name="submit"/>
</form>
</center>
</body>

</html>

<?php

error_reporting(0);
$sem= $_GET["sem"];

session_start();


if ($sem =="5"){
 header("Location: fifth.php");
}
else if($sem =="6"){
    header("Location: sixth.php");
}
else if($sem =="7"){
    header("Location: seventh.php");
}
else if($sem == "8"){
    header("Location: eigth.php");
}

?>