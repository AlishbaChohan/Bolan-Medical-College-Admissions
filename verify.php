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
     <div class="container-fluid-sm">
        <div class="row">
            <div class="col-sm-4 header" style="height:100vh;">
               <div class="align " >
                   <img src="img/logo4.png"><br><br>
                   <span class=" h4 text-start text-white">Bolan Medical College Quetta</span>
                   <br> 
                   <span class="text-start text-white">Admission Portal </span>
               </div>
            </div>

            <div class="col-sm-8">
                <div class="fc col-sm"><br>
                    <span class=" h4 text-start text-success text-uppercase p-2" >Account Verification</span><br>

                    <div class="form text-center col-sm">
                        <br>
                        <br>
                        <?php 
                        // if($_SERVER['REQUEST_METHOD']=='get'){
                        include('connect.php');
                         $email=$_GET['email'];
                         $vcode=$_GET['verification_code'];

                         $sql="SELECT * from student_info Where email_id='$email' and verification_code='$vcode'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)==1){
                            $sql1="UPDATE student_info set status='active'";
                            $result2=mysqli_query($conn,$sql1);
                            if($result2){
                                echo "<span style='color:green;text-align:center;'> Your account hass been successfully verified,click the button below for Logging in.</span><br>";
                            }
                            else{
                                echo "<span style='color:red;text-align:center;'>error activating your account</span><br>";
                            }
                        }
                    // }
                        ?><br><br>
                        
                        <span class=" btn btn-success text-center"><a href="login.php" class="text-white">Login</a></span>
                        <br>
                       
                     </div>
                </div>
            </div>

        </div>




     </div>



</body>
</html>