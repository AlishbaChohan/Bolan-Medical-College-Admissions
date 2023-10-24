<?php
echo $s_id=$_GET['id'];
include("connect.php");
$sql="DELETE  FROM bds_priorities where student_id='$s_id'";
$res=mysqli_query($conn,$sql);
if($res){
    header("Location:edit_bds.php?id=".$s_id."");
}
else{
    echo mysqli_error($conn);
}
?>
