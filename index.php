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
    <title>BMC SignUp</title>

</head>
<body>
     <div class="container-fluid-sm" style="width:200vh;">
        <div class="row" >
            <div class="col-sm-4 header" style="height:100vh;">
               <div class="align " >
                   <img src="img/logo4.png"><br><br>
                   <span class=" h4 text-start text-white">Bolan Medical College Quetta</span>
                   <br> 
                   <span class="text-start text-white">Admission Portal </span>
               </div>
            </div>

            <div class="col-sm-8">
                <div class="fc">
                    <span class=" h4 text-start text-success text-uppercase p-2" > Create Account </span><br>

                    <div class="form loginform text-center">
                      
                        <form action="signup.php" method="POST">
                            <br><br>
                            <div class="container-sm">
                            <input type="text" name="name" id="name" required placeholder="Full Name"><br><br>
                            </label><input type="email" name="email" id="email" placeholder="Email" required ><br><br>
                            </label><input type="password" name="pass1" id="p1" placeholder="Password" required><br><br>
                            <input type="password" name="pass2" id="p2" placeholder="Confirm Password" required><br><br><br>
                            </div>
                            <input type="submit" value="SIGN UP" class="btn btn-success "><br>
                            
                        </form>
                        <br> 
                        <span class="text-center">Already a have an account? <a href="login.php" class="text-success">Login</a></span>
                        <br>
                        <span class="text-center">Are you an Administrator? <a href="panel.php" class="text-success">Access administration panel</a></span>
                        <br><br>


                        <?php
                        include('connect.php');
                        if($_SERVER['REQUEST_METHOD']=="POST"){
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $pass1=$_POST['pass1'];
                            $pass2=$_POST['pass2'];
                            $pass3=md5($_POST['pass1']);
                            $vcode="bmc".$email.time();

                            $msg="Your account has been successfully created.Please click the link below verify: <br>
                            http://www.bmcqta.com/verify.php?email=".$email."&verification_code=".$vcode."<br>".
                            "Note: if your link is not clickable, paste the above URL into the search menu and enter.";
                            $msg=wordwrap($msg,70);

                            $header="From: verify@bmcqta.com";


                            if($pass1!= $pass2){
                                echo "<span style='color:red; text-align:center;'>Your passwords do not match please try again</span><br>";
                            }
                            elseif($pass1=$pass2){
                                mail($email,"Bolan Medical College email verification",$msg, $header);
                                // SET FOREIGN_KEY_CHECKS=0;
                                $sql="INSERT INTO student_info (name,email_id,password,verification_code,status)
                                VALUES ('$name','$email','$pass3','$vcode','inactive')  ";
                                if(mysqli_query($conn,$sql)){
                                    echo "<span style='color:green;text-align:center;'>Your account has been successfully created.<br>Please check your email for further procedures</span><br><br>";
                                }
                                else{
                                    echo "<span style='color:red;text-align:center;'>Email already taken. Try again</span><br><br>";
                                    // echo mysqli_error($conn);
                                }
                            }
                            else{
                                // echo mysqli_error();
                            }

                        }
                        
                        ?>
                       

                     </div>
                </div>
            </div>
           

        </div>




     </div>



</body>
</html>