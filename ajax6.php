<?php
$user_id =$_POST["id"];
include('connect.php');
$sql ="UPDATE student_info set status='active' where id='$user_id'";
// $sql ="DELETE FROM edu_details where student_id='$user_id'";

if(mysqli_query($conn, $sql)){
    echo 1 ;
}
else{
    echo 0;
}
?>