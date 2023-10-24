<?php
echo $s_id=$_GET['id'];
include("connect.php");
$sql="DELETE  FROM mbbs_priorities where student_id='$s_id'";
$res=mysqli_query($conn,$sql);
if($res){
    header("Location:edit_mbbs.php?id=".$s_id."");
}
else{
    echo mysqli_error($conn);
}
?>
