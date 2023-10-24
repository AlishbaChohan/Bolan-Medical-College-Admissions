<?php
session_start();
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    // personal info variables


    // $email= $_SESSION['email'];
    $student_id= $_SESSION['id'];
    // $student_id= 1;
    $email= "fatimaazahir@gmail.com";
    $name=$_POST['name'];
    $religion= $_POST['religion'];
    $gender=$_POST['gender'];
    $dob=$_POST['dateofbirth'];
    $age=$_POST['age'];
    $cnic=$_POST['cnic'];
    $fathername=$_POST['fathername'];
    $fcnic=$_POST['fathercnic'];
    $foc=$_POST['father_occup'];
    $emp=$_POST['employer_address'];
    $dom=$_POST['domicile_no'];
    $doi=$_POST['dateofissue'];

    $fdom=$_POST['fatherdomicile'];
    $permdiv=$_POST['perm_div'];
    $permdis=$_POST['perm_dist'];
    $permadd=$_POST['perm_add'];
    $presdiv=$_POST['pres_div'];
    $presdis=$_POST['pres_dist'];
    $presadd=$_POST['pres_add'];

    $lano=$_POST['land_no'];
    $cello=$_POST['cell_no'];
    $what=$_POST['whats_no'];

    $category=$_POST['category'];
    $program=$_POST['program'];
    $academic=$_POST['academic'];



    include("connect.php");

    $sql= "UPDATE student_info
    SET name='$name', gender='$gender', religion='$religion', age='$age', 
    date_of_birth='$dob', cnic='$cnic', father_name='$fathername', father_cnic='$fcnic',
    father_occupation='$foc', employer_address='$emp', domicile_no='$dom', 
    date_of_issue='$doi', father_domicile='$fdom' , 
    present_address='$presadd', present_districts_id='$presdis', present_divisions_id='$presdiv', 
    permanent_address='$permadd',  permanent_districts_id='$permdis', permanent_divisions_id='$permdiv',
    landline_no='$lano', cell_no='$cello', whatsapp_no='$what',  seat_reservation_id='$category', 
    program='$program', academic='$academic'

    WHERE id='$student_id' ";

    

    $res= mysqli_query($conn, $sql);
    if($res){
        // echo "<br> <span style='color:green;text-align:center;'>Your personal information has been updated</span>";
         header("Location:education.php");
   
    }else{
        echo mysqli_error($conn);
    }

}
?>
