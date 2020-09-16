
<?php

$host="localhost"; // Host name *??what will be my host??*   
$username="u824583950_epilepsycare"; // Mysql username  
$password="123456"; // Mysql password  
$db_name="u824583950_epilepsycare"; // Database name  
$conn= mysqli_connect($host,$username,$password,$db_name);
if(!$conn)
die("connection failed".mysqli_error());



function alert($msg) {
    echo "<script type='text/javascript' color:red>alert('$msg');</script>";
}

 
$s = "SELECT temp FROM system";
$t = mysqli_query($conn, $s);

 $ro = mysqli_fetch_assoc($t);
 if($ro['temp']>1000)
 {
alert("the brain wave is up normal ");

 }


 ?>
