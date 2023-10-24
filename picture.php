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
    <title>BMC Picture </title>
</head>
<body style="background-color:azure;">
    <div class="container-sm border">
        <div class="row">
            <div class="col header">
                <div class="align2">
                   <img src="img/logo4.png"><br><br>
                   <span class=" h4 text-start text-white">Bolan Medical College Quetta</span>
                   <br> 
                   <span class="text-start text-white">Admission Portal </span>
               </div>
            </div>
        </div>
        <?php
        include('admin_menu.php');
        ?>
        
        <div class="row bg-white">
            <div class="col">
                <div class="fc2"><br>
                    <span class=" h4 text-start text-success text-uppercase p-2" >Upload Picture</span><br><br>
                     <div class="form2">
                        <form action="picture.php" method="POST" enctype="multipart/form-data">
                        <br>
                        <div class="row">
                            <div class="col">
                                <p> Upload a clear picture (selfies are not allowed)</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col"> 
                                <label for="profile_img" class="label-form">UPLOAD IMAGE: </label>
                                <input type="file" name="ufile" id="profile_img" class="form-control" required><br><br>
                            </div>
                        </div>

                        <div class="row">
                           
                            <div class="col-sm ">
                                    <?php
                                    // if($_SERVER('REQUEST_METHOD')=="POST")
                                    // {
                                    
                                        if(isset($_POST['submit'])){
                                            // $submit=$_POST['submit'];
                                    $s_id= $_SESSION['id'];
                                    $target_dir = "user_files/";
                                    $target_file = $target_dir.basename($_FILES["ufile"]["name"]);
                                    $uploadOk = 1;
                                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                                    // Check if image file is a actual image or fake image
                                    if(isset($_POST["submit"])) {
                                    $check = getimagesize($_FILES["ufile"]["tmp_name"]);
                                    if($check !== false) {
                                        // echo "<b style='color:green;'>File is an image - " . $check["mime"] . ".</b><br>";
                                        $uploadOk = 1;
                                    } else {
                                        echo "<b style='color:red;'>File is not an image.</b><br>";
                                        $uploadOk = 0;
                                    }
                                    }

                                    // Check if file already exists
                                    if (file_exists($target_file)) {
                                    $target_file=$target_file.time().".".$imageFileType;
                                    $uploadOk = 1;
                                    }

                                    // Check file size
                                    if ($_FILES["ufile"]["size"] > 2000000) {
                                    echo "<b style='color:red;'> Your file is too large.</b><br>";
                                    $uploadOk = 0;
                                    }

                                    // Allow certain file formats
                                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                    && $imageFileType != "gif" ) {
                                    echo "<b style='color:red;'> Only JPG, JPEG, PNG & GIF files are allowed.</b><br>";
                                    $uploadOk = 0;
                                    }

                                    // Check if $uploadOk is set to 0 by an error
                                    if ($uploadOk == 0) {
                                    echo "<b style='color:red;'>Your file was not uploaded.</b><br>";
                                    // if everything is ok, try to upload file
                                    } else {
                                    // unlink($_SESSION['profile_img']);
                                    if (move_uploaded_file($_FILES["ufile"]["tmp_name"], $target_file)) {

                                        include('connect.php');
                                        $sql="UPDATE student_info Set profile_pic='$target_file' Where id='$s_id'";
                                        if(mysqli_query($conn,$sql))
                                        {
                                        echo "<b style='color:green;'>The file ". htmlspecialchars( basename( $_FILES["ufile"]["name"])). " has been uploaded .</b><br>";
                                        // $_SESSION['profile_pic']=$target_file;
                                        // header('Location:admin.php');
                                    }
                                    } else {
                                        echo "<b style='color:red;'> Sorry, there was an error uploading your file.</b>";
                                        echo mysqli_error($conn);
                                    }
                                    }
                                }
                                    // }
                                ?>
                                 </div>

                                        <div class="col-sm text-end ">
                                            <input type="submit" value="upload" id="b" name="submit" class="btn btn-sm btn-primary">
                                        </div>
                                </div>
                                 <div class="row">
                                    <div class="col-sm text-end">
                                        <br> <br><br>
                                        <button class="btn btn-primary"> <a href="bank.php" class="text-decoration-none text-white">Previous</a> </button>
                                        <button class="btn btn-success btn-lg"><a href="admission_form.php" class="text-decoration-none text-white">Submit</a> </button>
                                    <br><br>
                                    </div>
                                </div>
                        </div>
                        </form>
                       
                       
           
           
                      
                      
                    </div><br><br>
                </div>  
              <br><br>


            </div>
        </div>
    </div>
</body>
</html>