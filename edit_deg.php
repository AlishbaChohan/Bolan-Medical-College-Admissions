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
    <title>Update Degree marks</title>
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
                <h1 class="bg">Insert/Update Student Degree Marks</h1><br><br>
                <form action="edit_deg.php" method="POST">
                    <span style="color:red;">Carefully Enter form id without bmc21 to make changes (e.g if FormID  is bmc21300 enter only 300)</span><br><br>

                    <label for="id" >Student_id: </label><input type="text" name="id" id="id" required>
                    
                    <br><br>
                    <label for="deg_idid" >Select degree: </label>
                    <select name="deg_id" >
                        <option value="">Select degree</option>
                        <option value="2">FSC</option>
                        <option value="3">MDCAT</option>
                    </select>

                    <br><br>
                    <input type="text"  name="ob1" class="form-control"  placeholder="Obtained Marks" required>
                    <input type="text" name="t1" class="form-control" placeholder="Total Marks" required>

                    <br><br>
                    <input type="text" class="form-control"  placeholder="Academic Passing Year" name="apy1" required>
                    <input type="text" class="form-control"  placeholder="Annual/Biannual" name="ab1" required>
                    <br><br>
                    <!-- <td><input type="text" class="form-control" name="p1"></td> -->
                    <input type="text" class="form-control"  placeholder="Subjects" name="sub1" required>
                    <input type="text" class="form-control"  placeholder="Board" name="board1" required>
                    <br><br>

                    




                    <br><br>

                    
                    <input type="submit" name="submit" value="Update">
                    
                    

                </form>
                <br><br>

                <?php
                    include("connect.php");
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                    //edu variables

                    $s_id=$_POST['id'];
                    // $d_obt= $_POST['d_obt'];
                    // $d_total= $_POST['d_total'];
                    $deg_id=$_POST['deg_id'];
                    $apy1= $_POST['apy1'];
                    $ab1= $_POST['ab1'];
                    $t1= $_POST['t1'];
                    $ob1= $_POST['ob1'];

                    $perc=(intval($ob1)/intval($t1))*100;
                    $p1= round($perc,2);
                    $sub1= $_POST['sub1'];
                    $board1= $_POST['board1'];

                    $sql="SELECT * FROM edu_details Where student_id='$s_id' AND degree_id='$deg_id'";
                            $res=mysqli_query($conn,$sql);

                            if(mysqli_num_rows($res)>=1){

                                            $sql2="UPDATE edu_details SET obtained_marks='$ob1', total_marks='$t1', subjects_id='$sub1',passing_year='$apy1',annual_biannual='$ab1',percentage='$p1', board_name='$board1' Where student_id='$s_id' AND degree_id='$deg_id'";

                                            $res2=mysqli_query($conn,$sql2);
                                            if($res2){
                                                echo " <span style='color:green;text-align:center;'>Your information has been updated.Previous record existed</span>";
                                            // header("Location:mdcat.php");
                                        }
                                        else{
                                            echo mysqli_error($conn);
                                        }
                            }

                            elseif(mysqli_num_rows($res)==0) { 
                            $sql3 = "INSERT INTO edu_details 
                            (student_id, degree_id, subjects_id,
                            passing_year, annual_biannual, total_marks,
                            obtained_marks, percentage, board_name)
                            VALUES ('$s_id','$deg_id','$sub1','$apy1','$ab1','$t1','$ob1','$p1','$board1')";
                                $res3=mysqli_query($conn,$sql3);
                                if($res3){
                                    echo " <span style='color:green;text-align:center;'>Your information has been inserted. There was no previous record.</span>";
                                    // header("Location:mdcat.php");

                            }

                            }

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