<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 include("connect.php");
//  $s_id=$_SESSION['id'];
// $s_id=1;
$priority=$_POST['priority'];
$college=$_POST['college'];

$sql="INSERT INTO bds_priorities (priority,student_id,college_id)
Values ('$priority','$s_id','$college')";
$res=mysqli_query($conn,$sql);

if($res){
    echo "<br><span style='color:green;text-align:center;'>College choice has been added successfully.<br></span><br>";
   
}
else{
    // echo mysqli_error($conn);
    echo "<br><br><span style='color:red;text-align:center;'>Choice Already Exists</span>";
}


}
?>