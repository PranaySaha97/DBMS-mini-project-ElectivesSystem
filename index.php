<html>
<head>
<title>Electives</title>
</head>

<body>
<center>
<div>
<form action="index.php" method="GET">
USN: <input type="text" name="uname"/><br><br>
Password:<input type="password" name="pwd"/><br><br>
<input type="submit" value="Login" name="submit"/>
</form>
</div>
</center>
</body>

</html>

<?php
error_reporting(0);
$uname=$_GET["uname"];
$pass=$_GET["pwd"];

$res=mysqli_connect("localhost","root","root","electives");

$query="SELECT `usn`,`pass` FROM `registration`";
$cnt=0;

if($query_run=mysqli_query($res,$query)){

    while($query_row=mysqli_fetch_assoc($query_run)){
       $username=$query_row['usn'];
       $password=$query_row['pass'];
       // $password_hash=md5($password);

       
           if($pass==$password){


               if($uname==$username){
                   header('Location: SubSelect.php');
                }
               else{
                   echo "Invalid Username";
               }
               
               

           }
           else{
               $cnt++;
           }
        }
        if($cnt!=0){
            echo "<br>Invalid Password.";
        }


    }else{
        echo '<br>Unable to fetch data';
    }

?>