<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image" href="img/logo2.png">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>BMC Login</title>
</head>
<body>
    <div class="container-fluid-sm" style="width:200vh;">
        <div class="row">
            <div class="col-sm-4 header" style="height:100vh;">
            <!-- <div class="row">
                <div class="col-sm"> -->
                    <div class="align " >
                        <img src="img/logo4.png"><br><br>
                        <span class=" h4 text-start text-white">Bolan Medical College Quetta</span>
                        <br> 
                        <span class="text-start text-white">Admission Portal </span>
                    </div>
            </div>

            <div class="col-sm-8" >
                <div class="row">
                    <div class="col-sm">
                            <div class="fc"><br>
                                <span class=" h4 text-start text-success text-uppercase p-2">Administration Panel </span><br>

                                <div class="form text-center loginform" >
                                    <form action="panel.php" method="POST" >
                                        <br><br>
                                        <!-- <input type="text" name="name" id="name" required placeholder="Full Name"><br><br> -->
                                        </label><input type="email" name="email2" id="email2" placeholder="Administrator Email" required ><br><br>
                                        </label><input type="password" name="pass2" id="p2" placeholder="Administrator Password" required><br><br><br>
                                        <!-- <input type="password" name="pass2" id="p2" placeholder="Confirm Password" required><br><br><br> -->
                
                                        <input type="submit" value="LOG IN" class="btn btn-success"name="submit"><br><br><br>
                                        <p>Enter the password & Email provided you.</p>
                                        
                                    </form>
                                    <br>
                                    <?php
                                    if($_SERVER['REQUEST_METHOD']=='POST'){
                                        $email2= $_POST ["email2"];
                                        $pass2= $_POST ["pass2"];
                                        // And $pass2= "bmcqta2021"
                                        if($email2=="bmcqta_admission@bmc.com" && $pass2== "bmcqta_2021"){
                                            $_SESSION['email']="bmcqta_admission@bmc.com";
                                            $_SESSION['pass']="bmcqta_2021";
                                            $_SESSION['status']=1;
                                            
                                            header("Location:merit_panel.php");
                                        }
                                        else{
                                            echo "<span style='color:red;text-align:center;'>Invalid loggin details </span>";
                                        }
                                    }
                                    ?>
                                </div>
                                
                            </div>
                     </div>        
                </div>
            </div>
    
        </div>
    
    </div>
     
    
    
    </body>
    </html>