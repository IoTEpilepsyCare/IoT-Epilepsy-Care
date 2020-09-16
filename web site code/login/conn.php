<?php
$host="localhost"; // Host name *??what will be my host??*   
$username="u824583950_epilepsycare"; // Mysql username  
$password="123456"; // Mysql password  
$db_name="u824583950_epilepsycare"; // Database name  
$conn= mysqli_connect($host,$username,$password,$db_name);
if(!$conn)
die("connection failed".mysqli_error());


  ?>