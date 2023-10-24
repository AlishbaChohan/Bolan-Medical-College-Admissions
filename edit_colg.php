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
                <h1 class="bg">Edit Student College choices</h1><br><br>
                <form action="edit_colg_2.php" method="GET">
                    <label for="id">Enter form id without bmc21 to proceed (e.g if FormID  is bmc21300 enter only 300)</label>
                    <br><br>
                    <input type="text" name="id" id="id">
                    
                    <input type="submit" name="submit" value="Proceed">
                    <br><br>
                    <!-- <span style="color:red;">Note:if form appears empty please recheck your formId</span> -->
                    <button><a href="merit_panel.php"> Back</a></button>
                    <br><br>
                    

                </form>
                <br>
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