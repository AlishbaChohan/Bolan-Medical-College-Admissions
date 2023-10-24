<?php
session_start();
?>
<?php
    if($_SESSION['status']==1){
        $email2= $_SESSION["email"];
        $pass2= $_SESSION["pass"];
        // And $pass2= "bmcqta2021"
        // if($email2=="bmcqta_admission@bmc.com" && $pass2== "bmcqta_2021"){
            // header("Location:records.php");
       
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
    <title>BMC Administration Panel</title>
</head>
<body style="background-color:azure;">
    <div class="container-sm border">
       <?php
        include('header.php');
        ?>
        <?php
        include('admin_menu.php');
        ?>

        <div class="row bg-white">
                    <div class="col">
                        <div class="fc2"><br>
                            <span class=" h4 text-start text-success text-uppercase p-2" >Administrator Portal</span><br><br>
                            <p>Welcome to adminstrator portal! Below are given the links for completing various tasks</p>
                            <br><br>
                            <button class="btn btn-success text-white m-2"><a href="records.php" class="text-white text-decoration-none">ACCESS ALL RECORDS</a></button>

                            <button class="btn btn-success text-white m-2 "><a href="dist_records.php" class="text-white text-decoration-none">ACCESS DISTRICT RECORDS</a></button>

                            <button class="btn btn-success text-white m-2 "><a href="del_records.php" class="text-white text-decoration-none">DELETE RECORDS</a></button>

                            <button class="btn btn-success text-white m-2 "><a href="search_form.php " class="text-white text-decoration-none">DOWNLOAD FORM</a></button>
                            <br>

                            <button class="btn btn-success text-white m-2 "><a href="bogus_forms.php " class="text-white text-decoration-none">VIEW DELETE RECORDS</a></button>
                            <button class="btn btn-success text-white m-2 "><a href="subs_marks.php " class="text-white text-decoration-none">SUBJECTS MARKS RECORDS</a></button>
                            <button class="btn btn-success text-white m-2 "><a href="edit_subs.php " class="text-white text-decoration-none">EDIT SUBJECTS MARKS </a></button>
                            <button class="btn btn-success text-white m-2 "><a href="edit_deg.php " class="text-white text-decoration-none">EDIT MDCAT/FSC MARKS </a></button>
                            <button class="btn btn-success text-white m-2 "><a href="edit_dist.php " class="text-white text-decoration-none">EDIT DISTRICTS </a></button>
                            
                            <button class="btn btn-success text-white m-2 "><a href="colg_list.php " class="text-white text-decoration-none">COLLEGE CHOICES LIST </a></button>
                            <button class="btn btn-success text-white m-2 "><a href="edit_colg.php " class="text-white text-decoration-none">EDIT COLLEGE CHOICES </a></button>
                            <br>


                        </div>  
                         <br><br>
                    </div>
        </div>
        
  
  
        
    </div>
</body>
</html>
<?php
//  }
//  else{
//     //  echo "<span style='color:red;text-align:center;'>Invalid loggin details <a href='panel.php'>Go back</a></span>";
//     // echo "<script>alert('invalid login details go back and try again')</script>";
//     header("Location:panel.php");
//  }
}
else{
    header("Location:panel.php");
}
?>