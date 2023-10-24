<?php
include("connect.php");
if($_POST['type']==""){

    $sql="SELECT * FROM divisions";
    $result=mysqli_query($conn,$sql) or die ("query unsucessful");

    $str = "";

    while($row=mysqli_fetch_assoc($result)){
        $str.= "<option value='".$row['id']."'>".$row['div_name']."</option>" ;
        
    }
    echo $str;


}
elseif ($_POST['type']=="district"){
    $id=$_POST['id'];
    $sql="SELECT * FROM districts WHERE division_id='$id'";
    $result=mysqli_query($conn,$sql) or die ("query unsucessful");

    $str = "";

    while($row=mysqli_fetch_assoc($result)){
        $str.= "<option value='".$row['id']."'>".$row['district_name']."</option>" ;
       
    }
    echo $str;
}


    
        ?>




