<!DOCTYPE html>
<html>
<head>
   
    <title>Done</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <h1><center>Thank you!!!</center></h1>
    <br><b>Confirm your submission:</b><br>
    <br>Enter your usn: 
    <form action="ThankYou.php" method="POST">
    <input type="text" name="usn"/><br><br>
    <input type="submit" value="submit" name="submit"/> 
    </form><br><br>
    <?php
        error_reporting(0);
        $res=mysqli_connect("localhost","root","root","electives");
        $uname=$_POST['usn'];
        
        $query="SELECT * from elective where usn= '".$uname."'";
        
        $result=mysqli_query($res,$query);
        
        while($row= mysqli_fetch_assoc($result))
        {
            $usn=$row['usn'];
            $open=$row['open'];
            $prof=$row['prof'];
            
                echo "USN: ".$usn."<br>";
                echo "Open Elective ".$open."<br>";
                echo "Professional Elective: ".$prof."<br>";
                
        }
    ?>
    
    <form action="ThankYou.php" method="POST" >
        <input type="submit" value="Confirm" name="confirm"/>
        <input type="submit" value="Edit" name="edit"/>
    </form>

    <?php
        $cnfrm=$_POST["confirm"];
        $edit=$_POST["edit"];

        if (isset($cnfrm)){

            header("Location: index.php");

        }

        else if(isset($edit)){
            header("Location: edit.php");
        }
    ?>

</body>
</html>