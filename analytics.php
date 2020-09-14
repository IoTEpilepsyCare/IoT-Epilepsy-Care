 <?php
                                                 $host="localhost"; // Host name *??what will be my host??*   
    $username="u824583950_epilepsycare"; // Mysql username  
    $password="123456"; // Mysql password  
    $db_name="u824583950_epilepsycare"; // Database name  
    $conn= mysqli_connect($host,$username,$password,$db_name);
    if(!$conn)
    die("connection failed".mysqli_error());
    $c=0;

                                            
                                            $que="select reading FROM test ";
                                             if($result2 = mysqli_query($conn, $que)){
                            
                                                if(mysqli_num_rows($result2) > 0){
                                              while($row2 = mysqli_fetch_array($result2)){
                                              if($row2['reading']<40000)

                                              {
                                                $c=$c+1;
                                              }

                                          }
                                      }
                                  }
                                            ?>
