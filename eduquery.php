
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
//edu variables

$s_id=$_SESSION['id'];
// $s_id=1;
$deg1= $_POST['degree1'];
$apy1= $_POST['apy1'];
$ab1= $_POST['ab1'];
$t1= $_POST['t1'];
$ob1= $_POST['ob1'];

$perc=(intval($ob1)/intval($t1))*100;
$p1= round($perc,2);
$sub1= $_POST['sub1'];
$board1= $_POST['board1'];


  $sql="INSERT INTO edu_details 
    (student_id, degree_id, subjects_id,
    passing_year, annual_biannual, total_marks,
    obtained_marks, percentage, board_name)
    VALUES ('$s_id','$deg1','$sub1','$apy1','$ab1','$t1','$ob1','$p1','$board1')
    ";
    // $sql="SELECT * FROM edu_details ed,degree d Where student_id='$s_id' AND ed.degree_id=d.id";

$res=mysqli_query($conn,$sql);

if($res){
    echo "<br><span style='color:green;text-align:center;'>Educational record added successfully.<br></span><br>";
   
}
else{
    // echo mysqli_error($conn);
    echo "<br><br><span style='color:red;text-align:center;'>This degree info has already been added.</span>";
}

}
?>
