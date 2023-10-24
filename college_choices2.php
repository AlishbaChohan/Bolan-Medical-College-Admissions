<?php
session_start();
$s_id=$_SESSION['id'];
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
    <title>BMC Admin</title>
</head>
<body style="background-color:azure;">
<div class="container-sm border">
 <div class="row">
    <div class="col border header">
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
                    <span class=" h4 text-start text-success text-uppercase p-2" >BDS College Choices</span><br><br>
                    <div class="form2">
                      
                        <div class="row">
                            <div class="col-sm">
                                <?php
                                include('colgquery2.php');
                                ?>
                            </div> 
                        </div>

                        <?php
                            include("bds_colg.php");

                        ?> 
                        <div class="row">
                            <div class="col-sm">
                                <?php
                                include('connect.php');
                                //  $s_id=$_SESSION['id'];
                                // $s_id=1;
                                $sql2="SELECT * FROM bds_colleges c, bds_priorities p WHERE student_id='$s_id' AND p.college_id=c.id ORDER BY p.priority";
                                $res=mysqli_query($conn,$sql2);
                                    echo "<br><br><table class='table table-striped'>";
                                    echo "<thead><tr><th>Priority</th><th>College</th><th>Abbreviation</th> </tr></thead><tbody>";
                                    while($row=mysqli_fetch_assoc($res)){
                                        echo "<tr><td>".$row['priority']."</td><td>".$row['bds_colg']."</td><td>".$row['abbr']."</td></tr>";
                                          }
                                    echo "</tbody></table>";


                                ?>
                            </div> 
                        </div>


                        <div class="row">
                                <div class="col-sm text-end">
                                    <br> <br><br>
                                    <button class="btn btn-primary"> <a href="college_choices.php" class="text-decoration-none text-white">Previous</a> </button>
                                    <button class="btn btn-success"><a href="bank.php" class="text-decoration-none text-white"> Next</a> </button>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>  
              <br><br>
            </div>
        </div>
    </div>
</body>
</html>

