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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image" href="img/logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Bogus forms</title>
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
        .restore{
            background-color:mediumseagreen;
            width:70px;
            height:30px;
            border:none;
            border-radius:10px;
            color:white;
            cursor:pointer;
        }

        
    </style>
</head>
<body>

    <div class="rec">
        

        <?php
            include("connect.php");
            $sql="SELECT * FROM districts d, student_info s
             Where 
            --  s.id=c.student_id 
             s.permanent_districts_id=d.id 
             
             AND s.status='inactive'
            --  ORDER BY challan_no
             ";
            $res=mysqli_query($conn,$sql);
            ?>

           <p><button onclick="window.print()" style="background-color:mediumseagreen;color:white;height:30px;width:60px;border:none;border-radius:10px;">Print</button></p>
           <h3 class="bg">Number of Overall Deleted Records:<u> <?php echo mysqli_num_rows($res);?></u></h3> 
            
            <?php
                echo "<table>"; $sr=1;
                echo "<tr class='bg'><th>Sr.no</th><th>Student Name</th><th>Challan no</th><th>Form ID </th><th>District</th><th>Action</th></tr>";
            if (mysqli_num_rows($res)>0){
                
                
                while($row=mysqli_fetch_assoc($res)){
                    $student_id=$row['id'];
                    echo "<tr>"."<td>".$sr."</td>"."<td>".$row['name']."</td>";


                    $sql6="Select * from challan_details where student_id='$student_id'";
                    $res6=mysqli_query($conn,$sql6);

                    if(mysqli_num_rows($res6)>0){
                        while ($row6=mysqli_fetch_assoc($res6)){
                        echo "<td>".$row6['challan_no']."</td>";
                            }

                    }
                    else{
                        echo "<td></td>";
                    }
                    // "<td>".$row['challan_no']."</td>".
                    
                    echo "<td> bmc21".$row['id']."</td>"."<td>".$row['district_name']."</td>"."<td><button class='restore' data-id='{$row["id"]}'>Restore </button></td>"."</tr>";
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

<script>
    $(document).ready(function(){
    $(document).on("click",".restore", function(){
            if(confirm("Do you really want to Restore the record")){
                var user_id=$(this).data("id");
                var element = this;
            // alert(user_id);
            $.ajax({
                url:"ajax6.php",
                type:"POST",
                data : {id: user_id},
                success : function(data,status){
                    if (data == 1 ){
                        $(element).closest("tr").fadeOut();
                        // $('#result').html("record deleted");
                    }
                    else{
                        // $('#result').html("cannot delete record");
                        alert("Error Restoring record");
                    }
                }
                
            });
    }
                });
});
</script>



<?php
 }
 else{
    //  echo "<span style='color:red;text-align:center;'>Invalid loggin details <a href='panel.php'>Go back</a></span>";
    // echo "<script>alert('invalid login details go back and try again')</script>";
    header("Location:panel.php");
 }
// }
// else{
//     header("Location:panel.php");
// }
?>