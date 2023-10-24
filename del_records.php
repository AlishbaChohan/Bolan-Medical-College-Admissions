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
    <link rel="shortcut icon" type="image" href="img/logo2.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Records</title>
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
        .del{
            background-color:red;
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
           <!-- <p><button onclick="window.print()" style="background-color:mediumseagreen;color:white;height:30px;width:60px;border:none;border-radius:10px;">Print</button></p> -->
           <p>  
               <!-- <form action="dist_records.php" method="GET"> -->

               <script>
                    $(document).ready(function(){
                        $("#dist").change(function(){
                            var dist_id=$(this).val();

                            if (dist_id==""){
                                $("#result").html("");
                            }
                            $.ajax({
                                url:"ajax3.php",
                                type:"POST",
                                data:{id:dist_id},
                                success : function(data){
                                    $("#result").html(data);
                                }
                                
                            
                                
                            });
                        });
                    });
                </script>




               Select a district to view reords and then you will be able to delete: 
               <select name="dist" id="dist">
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
               <!-- <input type="submit" name="submit" value="submit">
            </form> -->
           </p>


           <h3 class="bg">Current Number of overall admissions:<u> </u></h3> 
            <div id="result"></div>
            

           
           
        
    </div>
</body>
</html>


<script>
    $(document).ready(function(){
    $(document).on("click",".del", function(){
            if(confirm("Do you really want to delete the record")){
                var user_id=$(this).data("id");
                var element = this;
            // alert(user_id);
            $.ajax({
                url:"ajax4.php",
                type:"POST",
                data : {id: user_id},
                success : function(data,status){
                    if (data == 1 ){
                        $(element).closest("tr").fadeOut();
                        // $('#result').html("record deleted");
                    }
                    else{
                        // $('#result').html("cannot delete record");
                        alert("Error deleting record");
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