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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Update District</title>
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
                <h1 class="bg">Update Permenant District</h1><br><br>
                <form action="edit_dist.php" method="POST">
                <span style="color:red;">Carefully Enter form id without bmc21 to make changes (e.g if FormID  is bmc21300 enter only 300)</span><br><br>

                    <label for="id" >Student_id: </label><input type="text" name="id" id="id" required>

                   

                    <br><br>
                    Select a district: 
                    <select name="div" id="div" required>
                        <option>Select Division</option>
                        <?php
                            include('connect.php');
                            $sql="SELECT * FROM divisions";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option value='".$row['id']."'>".$row['div_name']."</option>" ;
                                }
                            }
                        ?>
                    </select>
                   
                     <br><br>
                    Select a district: 
                    <select name="dist" id="dist" required>
                        <option>Select District</option>
                        <?php
                            include('connect.php');
                            $sql="SELECT * FROM districts";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option value='".$row['id']."'>".$row['district_name']."</option>" ;
                                }
                            }
                        ?>
                    </select>



                    <br><br>


                    <input type="submit" name="submit" value="Update">



                </form>
                <br><br>
                <?php
                    include("connect.php");
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                    //edu variables

                    $s_id=$_POST['id'];
                    $dist=$_POST['dist'];
                    $div=$_POST['div'];
                    $sql="SELECT * FROM student_info WHERE id='$s_id'";
                    $res=mysqli_query($conn,$sql);

                    if(mysqli_num_rows($res)>=1){
                            $sql2="UPDATE student_info SET permanent_districts_id='$dist', permanent_divisions_id='$div'  WHERE id='$s_id'";
                                $res2=mysqli_query($conn,$sql2);
                            if($res2){
                                echo " <span style='color:green;text-align:center;'>Your information has been updated.Previous record existed</span>";
                            // header("Location:mdcat.php");
                        }
                        else{
                            echo mysqli_error($conn);
                        }
                    }
                    else{
                        echo mysqli_error($conn);
                        echo "<span style='color:red;text-align:center;'>Error updating record.No record found .Please recheck id.</span>";
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


<script>
$(document).ready(function(){

    function loadData(type,category_id){
        $.ajax({
            url :"ajax1.php",
            type:"POST",
            data:{type:type , id:category_id },
            success: function(data){
                if (type=="district"){
                    $("#dist").html(data);
                }
                else{
                    $("#div").append(data);
                }
                
            }
        });

    }
    loadData();

    $("#div").on("change",function(){
        var perm_div= $("#div").val();

        loadData("district",perm_div);
    });

});
</script>