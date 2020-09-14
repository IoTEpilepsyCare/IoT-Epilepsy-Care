   $result = mysqli_query($conn,"SELECT Reading from test");




        $q="SELECT Reading from test  ";
            $result = mysqli_query($conn, $q);
            if($result2 = mysqli_query($conn, $q)){

                $y2 = 1550;                
                 if(mysqli_num_rows($result2) > 0){
                  while($row = mysqli_fetch_array($result2)){
                   $y1=$row['Reading']; 
                   if($y1>=40000)
                   {
                    $y2 =$y1;
                    $y1=0;

                      
                     
                   }
                   else
                    {
                        $y2=0;
                    }

          array_push($dataPoints1, array("x" => $x, "y" => $y1));
          array_push($dataPoints2, array("x" => $x, "y" => $y2));
          $x += $updateInterval;


                 }}


        }
        $email=$_SESSION['Email'];
        $password= $_SESSION['password']; 

        $sql = "SELECT * FROM patient Where Email ='$email' AND Password='$password' ";
        $result= mysqli_query($conn, $sql);

         $row = mysqli_fetch_assoc($result);


        function alert($msg) {
            echo "<script type='text/javascript' color:red>alert('$msg');</script>";
        }

         
        $s = "SELECT temp FROM system";
        $t = mysqli_query($conn, $s);

         $ro = mysqli_fetch_assoc($t);
         if($ro['temp']>40000)
         {
        alert("the brain wave is up normal ");

         }
