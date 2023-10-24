<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image" href="img/logo2.png">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

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
        

                <div class="row">
                                
                                <div class="col-sm">
                                    <?php
                                        if($_SERVER['REQUEST_METHOD']=='POST'){
                                            include("connect.php");
                                            // personal info variables
                                        
                                        
                                            // $email= $_SESSION['email'];
                                            $student_id= $_SESSION['id'];
                                            // $student_id= 1;
                                          
                                            
                                            $c_no= $_POST['c_no'];
                                            $b_name=$_POST['bank_name'];
                                            $b_code=$_POST['branch_code'];
                                            $b_location=$_POST['bank_location'];
                                            $d_date=$_POST['deposit_date'];
                                            $amount=$_POST['amount'];
                                            


                                            // $sql ="UPDATE student_info SET registration_no='$reg', mdcat_roll_no='$mdcat', board='$board', t_service='$t_service' Where id='$student_id'";
                                            $sql="SELECT * FROM challan_details WHERE student_id='$student_id'";
                                           $res=mysqli_query($conn,$sql);
                                           while($row=mysqli_fetch_assoc($res))
                                                            {
                                                                echo $row['challan_no'];
                                                            }
                                            
                                            if(mysqli_num_rows($res)>=1){

                                                $sql2="UPDATE challan_details SET challan_no='$c_no', bank_name='$b_name', branch_code='$b_code', bank_location='$b_location', deposit_date='$d_date', amount='$amount' WHERE student_id='$student_id'";
                                                 $res2=mysqli_query($conn,$sql2);
                                                if($res2){
                                                    // echo " <span style='color:green;text-align:center;'>Your information has been updated</span>";
                                                header("Location:picture.php");
                                            }
                                            else{
                                                echo mysqli_error($conn);
                                            }
                                            }

                                            elseif(mysqli_num_rows($res)==0) { 
                                            $sql3 = "INSERT INTO challan_details (challan_no, student_id, bank_name, branch_code, bank_location, deposit_date, amount)
                                            VALUES ('$c_no','$student_id','$b_name', '$b_code', '$b_location', '$d_date','$amount')";
                                               $res3=mysqli_query($conn,$sql3);
                                               if($res3){
                                               header("Location:picture.php");
                                            
                                            }

                                            }

                                            else{
                                                 echo mysqli_error($conn);
                                                //  echo "0nrecords";
                                            }

                                        }
                                    ?>
                                </div>
                            </div>


        <div class="row bg-white">
            <div class="col">
                <div class="fc2">
                <div class="form2">
                            <form action="bank.php" method="POST" id="form">
                            <div class="row">
                                    <div class="col-sm">
                                        <br>
                                        <span class=" h4 text-start text-success text-uppercase p-2" >Bank Challan Information</span><br><br>
                                        <label for="c_no"  class="form-label" >Challan Number: </label><input type="text" minlength="5" id="c_no" name="c_no" class="form-control" required><br>
                                        <label for="bank_name"  class="form-label" >Bank Name: </label><input type="text" id="bank_name" name="bank_name" class="form-control" required><br>
                                        <label for="branch_code"  class="form-label" >Bank Branch code: </label><input type="text" id="branch_code" name="branch_code" class="form-control" required><br>
                                        <label for="bank_location"  class="form-label" >Bank Location: </label><input type="text" id="bank_location" name="bank_location" class="form-control" required><br>
                                        <label for="deposit_date"  class="form-label" >Challan deposit date: </label><input type="date" id="deposit_date" name="deposit_date" class="form-control" required><br>
                                        <label for="amount"  class="form-label" >Amount(Rs): </label><input type="text" id="amount" name="amount" class="form-control" required><br>
                                        
                                    </div>
                                </div>
                                 
                                 <div class="row">
                                    <div class="col-sm text-end">
                                        <br> <br><br>
                                        <button class="btn btn-primary"> <a href="college_choices2.php" class="text-decoration-none text-white">Previous</a> </button>
                                        <input type="submit" value="Next" class="btn btn-success"><br><br>
                                        <!--<button class="btn btn-success"><a href="picture.php" class="text-decoration-none text-white"> Next</a> </button>-->
                                    <br><br>
                                    </div>
                                </div> 


                            </form>
                            </div>
                </div><br><br>
            </div>
        </div>

        
        
    </div>
</body>
</html>
<script>

$(document).ready(function() {
    $("#form").validate({
        rules: {
        c_no : {
        required: true,
        minlength: 5
        }

        },
        messages : {
        c_no: {
        minlength: "<span style='color:red'>Incorrect Challan number</span>"
        }
        }

    });
});


// const c_no = document.getElementById("c_no");

// c_no.addEventListener("input", function (event) {
//   if (c_no.validity.typeMismatch) {
//     c_no.setCustomValidity("Incorrect Challan number");
//   } else {
//     c_no.setCustomValidity("");
//   }
// });
</script>