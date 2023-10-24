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
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <title>BMC Admin</title>
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
                    <div class="row">
                        <div class="col-sm">
                            <?php
                                include("subsquery.php");
                            ?>


                        </div>
                    </div>


        <div class="form2">
            <form action="subjects.php" method="POST">
                <div class="row">
                    <span class=" h4 text-start text-success text-uppercase p-2" >FSc MARKS DETAILS</span><br><br>
                    <p class="text-danger" >Carefully enter your obtained marks (overall of FSc-I and Fsc-II) and total marks (overall of FSc-I and Fsc-II) of each subject. </p>
                        
                </div> 
<br>
                <div class="row">
                <span class=" h6 text-start text-success text-uppercase p-2" >CHEMISTRY</span><br><br>
                    <div class="col-sm">
                        
                        <input type="text"  name="c_obt" class="form-control"  placeholder="Obtained Marks" required><br>
                        
                    </div>
                    <div class="col-sm">
                        
                        <input type="text" name="c_total" class="form-control" placeholder="Total Marks" required><br>
                        
                    </div>

                    <div class="col-sm">

                    </div>
                </div>

                <div class="row">
                <span class=" h6 text-start text-success text-uppercase p-2" >PHYSICS</span><br><br>
                    <div class="col-sm">
                        
                        <input type="text"  name="p_obt" class="form-control"  placeholder="Obtained Marks" required><br>
                        
                    </div>
                    <div class="col-sm">
                        
                        <input type="text" name="p_total" class="form-control" placeholder="Total Marks" required><br>
                        
                    </div>

                    <div class="col-sm">

                    </div>
                </div>

                <div class="row">
                <span class=" h6 text-start text-success text-uppercase p-2" >BIOLOGY</span><br><br>
                    <div class="col-sm">
                        
                        <input type="text"  name="b_obt" class="form-control"  placeholder="Obtained Marks" required><br>
                        
                    </div>
                    <div class="col-sm">
                        
                        <input type="text" name="b_total" class="form-control" placeholder="Total Marks" required><br>
                        
                    </div>

                    <div class="col-sm">

                    </div>
                </div>

                <div class="row">
                <span class=" h6 text-start text-success  p-2" >MATHEMATICS (optional)</span><br><br>
                    <div class="col-sm">
                        
                        <input type="text"  name="m_obt" class="form-control"  placeholder="Obtained Marks" ><br>
                        
                    </div>
                    <div class="col-sm">
                        
                        <input type="text" name="m_total" class="form-control" placeholder="Total Marks" ><br>
                        
                    </div>

                    <div class="col-sm">

                    </div>
                </div>




        
        <div class="row">
            <div class="col-sm text-end">
                <br> <br>
                <button class="btn btn-primary"> <a href="education.php" class="text-decoration-none text-white">Previous</a> </button>
                <input type="submit" value="Next" class="btn btn-success"><br><br>
                
            
            </div><br><br>
        </form>
        </div> 
        
    </div>
</body>
</html>