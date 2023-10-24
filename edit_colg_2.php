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
        include('connect.php');
        $s_id=$_GET['id'];
        $sql1="SElect * from student_info where id='$s_id'";
        $res1=mysqli_query($conn,$sql1);
        $sr=1;
        echo"<tbody>";
        if (mysqli_num_rows($res1)>0 ){
            $row1=mysqli_fetch_assoc($res1);


             
           
            // $sql2="SELECT * FROM colleges c, mbbs_priorities p WHERE student_id='$s_id' AND p.college_id=c.id ORDER BY p.priority";
            // $res=mysqli_query($conn,$sql2);
            //     echo "<br><br><table class='table table-striped'>";
            //     echo "<thead><tr><th>Priority</th><th>College</th><th>Abbreviation</th></tr> </thead><tbody>";
            //     while($row=mysqli_fetch_assoc($res)){
            //         echo "<tr><td>".$row['priority']."</td><td>".$row['colg_name']."</td><td>".$row['abbr']."</td></tr>";
            //           }
            //     echo "</tbody></table>";
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image" href="img/logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit College Choices</title>
</head>
<body>
<style>
        .rec{
            width:90%;
            margin:auto;
            /* border:2px solid black; */
            text-align: center;
        }

        table ,tr,td,th{
            border:2px solid black;
        }

        .table{
            /* border-collapse:collapse; */
            width:70%;
            /* left:20%; */
            top:100px;
            position:relative;
            margin-top:20px;
            /* margin-bottom:20px; */
            border:1px solid black;
            padding:20px;
            /* min-height:500px; */
            margin:auto;
        }
        .bg{
            background-color:lightblue;
            width:80%;
            margin:auto;
        }

        table{
            border-collapse:collapse;
            padding:20px;
        }

        button{
            background-color:mediumseagreen;
            color:white;
            width:90px;
            height:40px;
            margin:20px;
            border:none;
            border-radius:10px;
            font-size:15px;
        }
        a{
            color:white;
            text-decoration:none;
        }

        
    </style>
    <body>
        <div class="rec">
            <div class="table">
                <h1 class="bg">Student College choices</h1><br><br>
                <p>
                    <span><b> Name: </b><?php  echo $row1['name'];?> </span>    <br>
                    <span><b> Father Name: </b><?php  echo $row1['father_name'];?> </span>
                    <!-- <span><b> Name: </b><?php  echo $row1['name'];?> </span> -->
                </p>

                <button onclick="window.print()">Print</button>
                <button ><a href="edit_mbbs.php?id=<?php echo $s_id;?>"> Edit MBBS</a></button>
                <button><a href="edit_bds.php?id=<?php echo $s_id;?>"> Edit BDS</a></button>
                <button><a href="edit_colg.php"> Back</a></button>
                <br><br>



                <table style='margin:auto;'>
                    <tr>
                    <td>
                    <br>
                <h2 class="bg">MBBS College choices</h2>

                <?php
                $sql2="SELECT * FROM colleges c, mbbs_priorities p WHERE student_id='$s_id' AND p.college_id=c.id ORDER BY p.priority";
                $res=mysqli_query($conn,$sql2);
                    echo "<br><br><table class='table-striped'>";
                    echo "<thead><tr><th>Priority</th><th>College</th><th>Abbreviation</th></tr> </thead><tbody>";
                    while($row=mysqli_fetch_assoc($res)){
                        echo "<tr><td>".$row['priority']."</td><td>".$row['colg_name']."</td><td>".$row['abbr']."</td></tr>";
                        }
                    echo "</tbody></table>";

                ?>


                    <br><br>
                  </td> 

                  <td>
                      <br>
                <h2 class="bg">BDS College choices</h2>

                <?php
                $sql3="SELECT * FROM bds_colleges c, bds_priorities p WHERE student_id='$s_id' AND p.college_id=c.id ORDER BY p.priority";
                $res3=mysqli_query($conn,$sql3);
                    echo "<br><br><table class='table-striped'>";
                    echo "<thead><tr><th>Priority</th><th>College</th><th>Abbreviation</th> </tr></thead><tbody>";
                    while($row3=mysqli_fetch_assoc($res3)){
                        echo "<tr><td>".$row3['priority']."</td><td>".$row3['bds_colg']."</td><td>".$row3['abbr']."</td></tr>";
                          }
                    echo "</tbody></table>";

                ?>


                    <br><br>
                  </td> 


                </tr>
                </table>
                <br><br>
                    
                <br>
            </div>
        </div>

    </body>
</body>
</html>
<?php
 }
 else{
    //  echo "<span style='color:red;text-align:center;'>Invalid loggin details <a href='panel.php'>Go back</a></span>";
    // echo "<script>alert('invalid login details go back and try again')</script>";
    header("Location:edit_colg.php");
 }
}
else{
    header("Location:panel.php");
}
?>