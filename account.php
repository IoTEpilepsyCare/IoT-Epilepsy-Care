<?php
session_start();
$host="localhost"; // Host name *??what will be my host??*   
$username="u824583950_epilepsycare"; // Mysql username  
$password="123456"; // Mysql password  
$db_name="u824583950_epilepsycare"; // Database name  
$conn= mysqli_connect($host,$username,$password,$db_name);
if(!$conn)
die("connection failed".mysqli_error());


 
$email=$_SESSION['Email'];
$password= $_SESSION['password']; 

$sql = "SELECT * FROM patient Where Email ='$email' AND Password='$password' ";
$result = mysqli_query($conn, $sql);

 $row = mysqli_fetch_assoc($result);



  
  ?>


 <?php

$host="localhost"; // Host name *??what will be my host??*   
$username="u824583950_epilepsycare"; // Mysql username  
$password="123456"; // Mysql password  
$db_name="u824583950_epilepsycare"; // Database name  
$conn= mysqli_connect($host,$username,$password,$db_name);
if(!$conn)
die("connection failed".mysqli_error());


  
$Fname=$_POST['firstname'];
$Lname=$_POST['Lastname'];
$Phone=$_POST['Phone'];
$Weight=$_POST['Weight'];
$email=$_SESSION['Email'];
$Gender=$_POST['gender'];
$Address=$_POST['Address'];
$password=$_POST['password'];





$email=$_SESSION['Email'];

if(isset($_POST['up']))
{
$sql3="UPDATE patient SET 
Fname='$Fname',
Lname='$Lname',
the_weight=$Weight,
Phone_P=$Phone,
Gender='$Gender',
Address='$Address'

WHERE Email='$email'
 
  ";


 $result3=mysqli_query($conn,$sql3);

if ($reslt3) {
  echo "</br></br>";
  echo "<label color=white><b><font color=blue >";
    echo "Record updated successfully";
    echo "</b></label>";
} else {
  echo "</br></br>";
  echo "<label color=white><b><font color=red >";
    echo mysqli_error($conn);
    echo "</b></label>";
}

mysqli_close($conn);
}





if(isset($_POST['up2']))
{
   
$sql3="UPDATE patient SET 
Password=$password

WHERE Email='$email'
 
  ";


echo "$Password";



 $result3=mysqli_query($conn,$sql3);

if ($reslt3) {
  echo "</br></br>";
  echo "<label color=white><b><font color=blue >";
    echo "Record updated successfully";
    echo "</b></label>";
} else {
  echo "</br></br>";
  echo "<label color=white><b><font color=red >";
    echo mysqli_error($conn);
    echo "</b></label>";
}

mysqli_close($conn);
}




?>
