
<?php
include("conn.php");

function alert($msg) {
    echo "<script type='text/javascript' color:red>alert('$msg');</script>";
}

 
$sql = "SELECT temp FROM test ";
$result = mysqli_query($conn, $sql);

 $row = mysqli_fetch_assoc($result);
 if($row['temp']<1000)
 {
alert("the brain wave is up normal ");

 }

else
{
echo ("hi");
}
 ?>
