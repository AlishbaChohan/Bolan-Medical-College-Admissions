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
        $s_id=$_GET['id'];
       include("connect.php");
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
        table{
            border-collapse:collapse;
            padding:20px;
            margin: auto;
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
        .del{
            background-color:red;
            color:white;
            width:150px;
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
                <h1 class="bg">Edit BDS College choices</h1><br><br>
                <button onclick="window.print()">Print</button>
                <button><a href="edit_colg_2.php?id=<?php echo $s_id;?>">Back</a></button>
                <button class="del"><a onclick="alert('Do you really want to delete all choices of student?')" href="edit_bds_2.php?id=<?php echo $s_id;?>">Delete All Choices</a></button>
                <br><br>


                <?php
                if(isset($_GET['submit'])){
                
                $s_id=$_GET['id'];

                $priority=$_GET['priority'];
                $college=$_GET['college'];

                $sql="INSERT INTO bds_priorities (priority,student_id,college_id)
                Values ('$priority','$s_id','$college')";
                $res=mysqli_query($conn,$sql);

                if($res){
                    echo "<br><span style='color:green;text-align:center;'>College choice has been added successfully.<br></span><br>";
                
                }
                else{
                    // echo mysqli_error($conn);
                    echo "<br><br><span style='color:red;text-align:center;'>Choice Already Exists</span>";
                }


                }
                ?>
                <br><br>
                <form action="edit_bds.php" method="GET">

                <select name="college" id="college" class="form-control" required> 
                    <option> Select a College</option>
                    <?php
                    include('connect.php');
                    // $s_id=$_SESSION['id'];
                    $s_id=$_GET['id'];
                    
                    $sql3="SELECT * FROM bds_colleges c where c.id NOT IN (select college_id from bds_priorities where student_id='$s_id')";
                    $result3=mysqli_query($conn,$sql3);
                   
                    if(mysqli_num_rows($result3)>0){
                        while($row3=mysqli_fetch_assoc($result3)){
                            echo "<option value='".$row3['id']."'>".$row3['bds_colg']."</option>" ;
                        }
                    }
                    ?>
                </select>
                <select name="priority" class="form-control" required>
                    <option>Select priority</option>
                    <?php
                    $s_id=$_GET['id'];
                    $sql4="SELECT * FROM b_priority where priority_no NOT IN (select priority from bds_priorities where student_id='$s_id') ";
                    $result4=mysqli_query($conn,$sql4);
                 
                    if(mysqli_num_rows($result4)>0){
                        while($row4=mysqli_fetch_assoc($result4)){
                            echo "<option value='".$row4['priority_no']."'>".$row4['priority_no']."</option>" ;
                        }
                    }
                    ?>
                    </select>

                    <input type="hidden" name="id" value="<?php echo $s_id=$_GET['id'];?>">
                    <input type="submit" name="submit" value="Insert">

                    <br><br>
                    <!-- <span style="color:red;">Note:if form appears empty please recheck your formId</span> -->
                    

                </form>
                <br>
               

                <?php
                include("connect.php");
                $s_id=$_GET['id'];

                $sql2="SELECT * FROM bds_colleges c, bds_priorities p WHERE student_id='$s_id' AND p.college_id=c.id ORDER BY p.priority";
                $res2=mysqli_query($conn,$sql2);
                    echo "<br><br><table class='table-striped'>";
                    echo "<thead><tr><th>Priority</th><th>College</th><th>Abbreviation</th></tr> </thead><tbody>";
                    while($row2=mysqli_fetch_assoc($res2)){
                        echo "<tr><td>".$row2['priority']."</td><td>".$row2['bds_colg']."</td><td>".$row2['abbr']."</td></tr>";
                        }
                    echo "</tbody></table>";

                ?>


                    <br><br>
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