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
    <link rel="shortcut icon" type="image" href="img/logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Subjects marks</title>
</head>
<body>
<style>
        .rec{
            width:80%;
            margin:auto;
            /* border:2px solid black; */
            text-align: center;
        }

        table ,tr,td,th{
            border:2px solid black;
        }

        .table{
            /* border-collapse:collapse; */
            width:60%;
            left:20%;
            top:100px;
            position:relative;
            margin-top:20px;
            margin-bottom:20px;
            border:1px solid black;
            padding:20px;
        }
        .bg{
            background-color:lightblue;
            width:80%;
            margin:auto;
        }

        
    </style>
    <body>
        <div class="rec">
            <div class="table">
                <h1 class="bg">Update Student Subjects Marks</h1><br><br>
                <form action="edit_subs.php" method="POST">
                    <span style="color:red;">Carefully Enter form id without bmc21 to make changes (e.g if FormID  is bmc21300 enter only 300)</span><br><br>

                    <label for="id" >Student_id: </label><input type="text" name="id" id="id" required>
                    
                    <br><br>
                    <input type="text"  name="c_obt" class="form-control"  placeholder="Chemistry Obtained Marks" required>
                    <input type="text" name="c_total" class="form-control" placeholder="Chemistry Total Marks" required>

                    <br><br>
                    <input type="text"  name="p_obt" class="form-control"  placeholder="Physics Obtained Marks" required>
                    <input type="text" name="p_total" class="form-control" placeholder="Physics Total Marks" required>

                    <br><br>
                    <input type="text"  name="b_obt" class="form-control"  placeholder="Biology Obtained Marks" required>
                    <input type="text" name="b_total" class="form-control" placeholder="Biology Total Marks" required>

                    <br><br>
                    <input type="text"  name="m_obt" class="form-control"  placeholder="Maths Obtained Marks" required>
                    <input type="text" name="m_total" class="form-control" placeholder="Maths Total Marks" required>




                    <br><br>

                    
                    <input type="submit" name="submit" value="Update">
                    
                    

                </form>
                <br><br>
                <?php
                    include("connect.php");
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                    //edu variables

                    $s_id=$_POST['id'];
                    // $s_id=1;
                    $c_obt= $_POST['c_obt'];
                    $c_total= $_POST['c_total'];
                    $p1=(intval($c_obt)/intval($c_total))*100;
                    $c_per= round($p1,2);

                    $p_obt= $_POST['p_obt'];
                    $p_total= $_POST['p_total'];
                    $p2=(intval($p_obt)/intval($p_total))*100;
                    $p_per= round($p2,2);

                    $b_obt= $_POST['b_obt'];
                    $b_total= $_POST['b_total'];
                    $p3=(intval($b_obt)/intval($b_total))*100;
                    $b_per= round($p3,2);

                    $m_obt= $_POST['m_obt'];
                    $m_total= $_POST['m_total'];
                    $p4=(intval($m_obt)/intval($m_total))*100;
                    $m_per= round($p4,2);

                    $sql="SELECT * FROM subjects WHERE student_id='$s_id'";
                            $res=mysqli_query($conn,$sql);

                            if(mysqli_num_rows($res)>=1){

                                            $sql2="UPDATE subjects SET c_obt='$c_obt', c_total='$c_total',c_per='$c_per',p_obt='$p_obt', p_total='$p_total',p_per='$p_per',
                                            b_obt='$b_obt', b_total='$b_total',b_per='$b_per', m_obt='$m_obt', m_total='$m_total',m_per='$m_per' WHERE student_id='$s_id'";
                                                $res2=mysqli_query($conn,$sql2);
                                            if($res2){
                                                echo " <span style='color:green;text-align:center;'>Your information has been updated.Previous record existed</span>";
                                            // header("Location:mdcat.php");
                                        }
                                        else{
                                            echo mysqli_error($conn);
                                        }
                            }

                            // elseif(mysqli_num_rows($res)==0) { 
                            // $sql3 = "INSERT INTO subjects 
                            // (student_id,c_obt,c_total,c_per,p_obt,p_total,p_per,b_obt,b_total,b_per,m_obt,m_total,m_per)
                            // VALUES ('$s_id','$c_obt','$c_total','$c_per','$p_obt','$p_total','$p_per','$b_obt','$b_total','$b_per','$m_obt','$m_total','$m_per')
                            // ";
                            //     $res3=mysqli_query($conn,$sql3);
                            //     if($res3){
                            //         echo " <span style='color:green;text-align:center;'>Your information has been inserted. There was no previous record.</span>";
                            //         // header("Location:mdcat.php");

                            // }

                            // }

                            else{
                                    echo mysqli_error($conn);
                                    echo "Error updating record .Please recheck id.";
                                //  echo "0nrecords";
                            }

                            }
                    ?>
            </div>
        </div>

    </body>
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