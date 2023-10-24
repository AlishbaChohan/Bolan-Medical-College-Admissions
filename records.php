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
<link rel="shortcut icon" type="image" href="img/logo2.png">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image" href="img/logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
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

        table{
            border-collapse:collapse;
            width:90%;
            left:5%;
            position:relative;
            margin-top:20px;
            margin-bottom:20px;
        }
        .bg{
            background-color:lightblue;
            width:90%;
            margin:auto;
        }

        
    </style>
</head>
<body>

    <div class="rec">
        

        <?php
            include("connect.php");
            $sql="SELECT * FROM districts d, challan_details c, student_info s Where s.id=c.student_id AND s.permanent_districts_id=d.id 
             AND (LENGTH(challan_no)=4 or LENGTH(challan_no)=5)
             AND s.status='active'
             ORDER BY challan_no";
            $res=mysqli_query($conn,$sql);
            ?>

           <p><button onclick="window.print()" style="background-color:mediumseagreen;color:white;height:30px;width:60px;border:none;border-radius:10px;">Print</button></p>
           <h3 class="bg">Current Number of overall admissions:<u> <?php echo mysqli_num_rows($res);?></u></h3> 
            
            <?php
                echo "<table>"; 
                echo "<tr class='bg'><th>Sr.no</th><th>Student Name</th><th>Challan no</th><th>Form ID </th><th>District</th></tr>";
            if (mysqli_fetch_assoc($res)>0){
                $sr=1;
                
                while($row=mysqli_fetch_assoc($res)){
                    echo "<tr>"."<td>".$sr."</td>"."<td>".$row['name']."</td>"."<td>".$row['challan_no']."</td>"."<td> bmc21".$row['id']."</td>"."<td>".$row['district_name']."</td>"."</tr>";
                    $sr++;
                }
               
                
            }
            else{
                echo mysqli_error($conn);
            }
             echo"</table>";
        ?>
        
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