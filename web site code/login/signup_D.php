<?php


include("conn.php");

if (!$conn) {

echo "<div align='right'>"; 
 echo "<label><b><font color=red>";
  echo "connection error </b></label>";
}
function alert($msg) {
    echo "<script type='text/javascript' color:red>alert('$msg');</script>";
}



$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email=$_POST['email'];
$password=$_POST['pass'];
$Phone=$_POST['Phone'];
$Address=$_POST['Address'];


if(isset($_POST['Sign_up']))
{


 $sql="INSERT INTO doctor_1(Fname,Lname,Email,Password,Phone_D,Address) VALUES ('$Fname','$Lname','$email',$password,$Phone,'$Address'); ";

 $result=mysqli_query($conn,$sql);

 if ($result) {

  alert("Saved");

}

else
{
  alert(mysqli_error($conn));
  
}

mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
<script type="text/javascript">
    function GoToHomePage()
         {
    window.location = 'http://epilepsycare.ahmadklaib.com';   
  }</script>
  
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post">
                  <span class="login100-form-title p-b-43">
            <div>
              <a onclick="javascript:GoToHomePage()" href="javascript:void(0)"><img src="images/back.png" style="height: 40px ; margin-left:-400px;margin-bottom: -1600px " ></a>
            </div>
                        Sign Up
                    </span>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Name is required">
                        <input class="input100" type="text" name="Fname">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Fname</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Phone is required">
                        <input class="input100" type="text" name="Lname">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Lname</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>
                    
                    
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Phone is required">
                        <input class="input100" type="text" name="Address">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Address</span>
                    </div>

<div class="wrap-input100 validate-input" data-validate="Phone is required">
                        <input class="input100" type="number" name="Phone">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Phone</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            
                        </div>

                        <div>
                            
                        </div>
                    </div>
            

                    <div class="container-login100-form-btn">
                         <input type="submit"  name="Sign_up" style="background-color: #1E255C;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;" value="Sign up" required>

                    </div>
                    
                    <div class="text-center p-t-46 p-b-20">
                        
                    </div>

                    <div class="login100-form-social flex-c-m">
                        
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('images/brain2.png');">
                </div>
            </div>
        </div>
    </div>
    
    

    
    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>