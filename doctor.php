<?php session_start();


 $host="localhost"; // Host name *??what will be my host??*   
                                          $username="u824583950_epilepsycare"; // Mysql username  
                                          $password="123456"; // Mysql password  
                                          $db_name="u824583950_epilepsycare"; // Database name  
                                         $conn= mysqli_connect($host,$username,$password,$db_name);

if (!$conn) {

    die("error in your conn");

echo "<div align='right'>"; 
 echo "<label><b><font color=red>";
  echo "connection error </b></label>";

}
mysqli_close($conn);

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Epilepsy Care</title>
    <link rel="icon" href="img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style >
        body{
            margin-top: -20px;
    
}
      
    
    </style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php" style="font-family: Arial Black">Home</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="Doctor.php" style="font-family: Arial Black">Doctors</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: Arial Black">
                                        Advice & Information
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="epilepsy.php" >About Epilepsy</a>
                                        <a class="dropdown-item" href="First_Aid.php" >First Aid For Seizures
</a>
                                        <a class="dropdown-item" href="Diet_patient.php">Diet for epilepsy patient</a>
                                    </div>
                                </li>
                               
                               
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html" style="font-family: Arial Black">Contact</a>
                                </li>
                            </ul>
                        </div>
                       
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::doctor_part start::-->
    <section class="doctor_part single_page_doctor_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2 style=" margin-top: -100px;"> Experienced Doctors</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/doctor/p2.jpeg" alt="doctor" height="280" width="250">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3 style="font-family: Arial Black">DR Osama Jamal </h3>
                                <p>Consultant of Neurosurgery </p></br>
                                <img src="img/doctor/p9.png" alt="doctor" height="30" width="30">Irbid, Amman New Complex, Outpatient Clinics of Ibn Al Nafees Hospital</br>
                                <img src="img/doctor/p8.png" alt="doctor" height="40" width="30">Fees: JOD 20</br>
                                <img src="img/doctor/p10.png" alt="doctor" height="30" width="30" > Standby time: 30 - 90 minutes



                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/doctor/p5.jpeg" alt="doctor" height="280" width="250">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3 style="font-family: Arial Black">DR Faris eajilat </h3>
                                <p>Consultant of Neurosurgery </p></br>

                                <img src="img/doctor/p9.png" alt="doctor" height="30" width="30">Amman, Al-Khaldi Street, 34 - Aqayleh Complex - Third Floor</br></br>
                                <img src="img/doctor/p8.png" alt="doctor" height="40" width="30">Fees: 30 JD</br>
                                <img src="img/doctor/p10.png" alt="doctor" height="30" width="30" >
Standby time: 0 - 10 minutes

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/doctor/p4.jpg" alt="doctor"  height="280" width="250">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3 style="font-family: Arial Black">DR Mohammed Ali</h3>
                                <p>Consultant of Neurosurgery </p></br>
                                 <img src="img/doctor/p9.png" alt="doctor" height="30" width="30">Amman, Istiklal Street, Istiklal Hospital - Outpatient Clinics - 3rd Floor - Clinic # 301</br>
                                <img src="img/doctor/p8.png" alt="doctor" height="40" width="30">Fees: 30 JD</br>
                                <img src="img/doctor/p10.png" alt="doctor" height="30" width="30" > Standby time: 15 - 30 minutes

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/doctor/p6.jpg" alt="doctor" height="280">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3 style="font-family: Arial Black">DR Mai Bader</h3>
                                <p>Consultant of Neurosurgery </p>
                            </br>
                                 <img src="img/doctor/p9.png" alt="doctor" height="30" width="30">Shmeisani - Opposite to Al Takhassusi Hospital Emergency - Abu Eid Plaza Complex  </br>
                                <img src="img/doctor/p8.png" alt="doctor" height="40" width="30">Fees: 13 JD</br>
                                <img src="img/doctor/p10.png" alt="doctor" height="30" width="30" > Standby time: 15 - 30 minutes
                            </div>
                        </div>
                    </div>
                </div>
                
                        
                    
             
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::doctor_part end::-->

    <!--::regervation_part start::-->
    <section class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form class="Appointment" method="post">
                                  <h2 style="font-family: Arial Black">Make an Appointment</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="Email" class="form-control" id="inputPassword4" name="Email" 
                                        placeholder="Email address">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="Select" name="doctor">
                                        <option value="None" selected>Select Doctor</option>
                                        <option value="Osama_Jamal@gmail.com">DR Osama Jamal</option>
                                        <option value="Faris_eajilat@gmail.com">DR Faris eajilat</option>
                                        <option value="Mohammed_Farhoud@gmail.com">DR Mohammed Farhoud</option>
                                        <option value="Mai_Bader@gmail.com">DR Mai Bader</option>
                                    </select>
                                </div>
                                 <div class="form-group col-md-6">
                                    <input type="date" class="form-control" id="inputPassword4" name="date_t" 
                                        placeholder="Date">
                                </div>
                                <div class="form-group time_icon col-md-6">
                                   <input type="TIME" class="form-control" id="inputPassword4" name="date_m" 
                                        placeholder="00:00:00:00">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Textarea" rows="4"
                                        placeholder="Your Note "></textarea>
                                </div>
                            </div>
                            <input type="submit" name=" savebtn">
               
                                
                              <!--:  <button type="button" class="btn btn-light" style="color:light blue";>Save</button> <a href="#" class="btn_2" name="savebtn" style="font-family: Arial Black" >Make an Appointment</a> -->
                           
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                    <img src="img/.png" alt=""  style=>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

    


    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>



<?php

 $host="localhost"; // Host name *??what will be my host??*   
                                          $username="u824583950_epilepsycare"; // Mysql username  
                                          $password="123456"; // Mysql password  
                                          $db_name="u824583950_epilepsycare"; // Database name  
                                         $conn= mysqli_connect($host,$username,$password,$db_name);


if (!$conn) {

echo "<div align='right'>"; 
 echo "<label><b><font color=red>";
  echo "connection error </b></label>";
}

$Name=$_POST['Name'];

$Email=$_POST['Email'];
$doctor=$_POST['doctor'];
$Time1=$_POST['date_t'];
$Time2=$_POST["date_m"];


if(isset($_POST['savebtn']))
{

 $sql="INSERT INTO appointments(Name_of_Patient,Email_of_Doctor,Email_of_Patient,Time_1,Time_2) VALUES ('$Name','
$doctor','$Email','$Time2','$Time1'); ";

 $result=mysqli_query($conn,$sql);

 if ($result) {

  echo "</br></br>"; 
  echo "<label><b><font color=blue>";
  echo "Saved";
  echo "</b></label>";

}

else
{
  echo "</br></br>"; 
  echo "<label><b><font color=red>";
  echo mysqli_error($conn);
  echo "</b></label>";
}

mysqli_close($conn);
}






?>
