<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image" href="img/logo2.png">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>BMC Admin</title>
</head>
<body style="background-color:azure;">
    <div class="container-sm border">
       <?php
        include('header.php');
        ?>
        <?php
        include('admin_menu.php');
        ?>
        
     <?php include("p_form.php");
     ?>
        
    </div>
</body>
</html>
<script>
$(document).ready(function(){

    function loadData(type,category_id){
        $.ajax({
            url :"ajax1.php",
            type:"POST",
            data:{type:type , id:category_id },
            success: function(data){
                if (type=="district"){
                    $("#perm_dist").html(data);
                }
                else{
                    $("#perm_div").append(data);
                }
                
            }
        });

    }
    loadData();

    $("#perm_div").on("change",function(){
        var perm_div= $("#perm_div").val();

        loadData("district",perm_div);
    });

});
</script>
<script>
$(document).ready(function(){

    function loadData(type,category_id){
        $.ajax({
            url :"ajax1.php",
            type:"POST",
            data:{type:type , id:category_id },
            success: function(data){
                if (type=="district"){
                    $("#pres_dist").html(data);
                }
                else{
                    $("#pres_div").append(data);
                }
                
            }
        });

    }
    loadData();

    $("#pres_div").on("change",function(){
        var pres_div= $("#pres_div").val();

        loadData("district",pres_div);
    });

});
</script>



