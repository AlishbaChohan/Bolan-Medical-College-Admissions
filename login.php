<?php
session_start();
?><!DOCTYPE html>
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
                            <div class="fc "><br>
                                <span class=" h4 text-start text-success text-uppercase p-2" >Login </span><br>

                                <div class="form text-center loginform" >
                                    <form action="login.php" method="POST" >
                                        <br><br>
                                        <!-- <input type="text" name="name" id="name" required placeholder="Full Name"><br><br> -->
                                        </label><input type="email" name="email" id="email" placeholder="Email" required ><br><br>
                                        </label><input type="password" name="pass1" id="p1" placeholder="Password" required><br><br><br>
                                        <!-- <input type="password" name="pass2" id="p2" placeholder="Confirm Password" required><br><br><br> -->
                
                                        <input type="submit" value="LOG IN" class="btn btn-success "><br><br><br>
                                        
                                    </form>
                                    <br>
                                    <span class="text-center"><a href="#" class="text-primary">Forgot Password</a></span> 
                                    <br><br>
                                    <span class="text-center">Don't a have an account? <a href="index.php" class="text-success">Create Account</a></span>
                                    <br>
                                    <span class="text-center">Are you an Administrator? <a href="panel.php" class="text-success">Access administration panel</a></span>
                                    <br><br>


                                    <?php

                                            if($_SERVER['REQUEST_METHOD']=='POST'){
                                                $email=$_POST['email'];
                                                $pass1=md5($_POST['pass1']);
                                                $active="active";
                                        
                                            include('connect.php');
                                                    if(isset($_POST['email'])){
                                                    $sql="SELECT * from student_info where email_id='$email' AND password='$pass1' AND status='$active'";
                                                    $res=mysqli_query($conn,$sql);
                                                        if(mysqli_num_rows($res)>0){  

                                                        while($row=mysqli_fetch_assoc($res))
                                                            {
                                                            $_SESSION['id']=$row['id'];
                                                            $_SESSION['name']=$row['name'];
                                                            $_SESSION['email']=$row['email_id'];
                                                            $_SESSION['profile_img']=$row['profile_pic'];
                                                     
                                                            header('Location:admin.php');
                                                            }
                                                        }
                                                
                                                    
                                                    else{
                                                    
                                                        echo "<span style='color:red;text-align:center;'>You are not a user / invalid loggin details / account not active </span>";
                                                    }
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