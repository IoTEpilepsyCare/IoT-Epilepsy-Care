<?php session_start();
include("conn.php");

if(isset($_POST['signin'])){
$email=$_POST['uname'];
$password=$_POST['pass'];
if(!$conn)
die("connection failed".mysqli_error());
 $result = mysqli_query($conn,"SELECT * FROM patient  where Email='$email' and Password='$password'");
 $result2 = mysqli_query($conn,"SELECT * FROM doctor_1 where Email='$email' and Password='$password'");





if(mysqli_num_rows($result)>0)
     {
        while($r=mysqli_fetch_array($result))
           {
           	 $check_username = $r['Email'];
             $check_password = $r['Password'];

             if ($email == $check_username && $password == $check_password) {
        
                 $_SESSION['Email']=$email;
                   $_SESSION['password']=$password;


        header("location:epilepsy_care2/index.php");
           }
		      
     }

 }


if(mysqli_num_rows($result2)>0)
     {
        while($r2=mysqli_fetch_array($result2))
           {
           	 $check_username = $r2['Email'];
             $check_password = $r2['Password'];

             if ($email == $check_username && $password == $check_password) {
        
                 $_SESSION['Email']=$email;
                   $_SESSION['password']=$password;


        header("location:doctor/index.php");
           }
		      
     }

 }

  



       else
       {    


     echo "<h3 style='color:red'> Invalid username or password </h3>"; 
  }


    


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

				<form class="login100-form validate-form" method="post" action="?">
					<span class="login100-form-title p-b-43">
						<div>
							<a onclick="javascript:GoToHomePage()" href="javascript:void(0)"><img src="images/back.png" style="height: 40px ; margin-left:-400px;margin-bottom: -870px " ></a>
						</div>
						Sign In 
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="uname">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						
						
					</div>
			

					<div class="container-login100-form-btn">
						 <input type="submit"  name="signin" style="background-color: #1E255C;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;" value="Sign in" required>

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
