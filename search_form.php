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
    <title>Search Form</title>
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
                <h1 class="bg">Search student Form</h1><br><br>
                <form action="form_download.php" method="POST">
                    <label for="id">Enter form id without bmc21 to get the form  (e.g if FormID  is bmc21300 enter only 300)</label>
                    <br><br><input type="text" name="id" id="id">
                    
                    <input type="submit" name="submit" value="search">
                    <br><br>
                    <span style="color:red;">Note:f form appears empty please recheck your formId</span>

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