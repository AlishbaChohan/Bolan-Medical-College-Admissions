<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
include('connect.php');
$s_id=$_POST['id'];
// $s_id=1;


$sql1="SELECT * FROM student_info s, divisions dv, districts dis, seat_reservation r
WHERE  s.id='$s_id' AND s.present_divisions_id=dv.id AND
s.present_districts_id=dis.id AND s.seat_reservation_id=r.id";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($res1);


$sql2="SELECT * FROM student_info s, divisions dv, districts dis
WHERE  s.id='$s_id' AND s.permanent_divisions_id=dv.id AND
s.permanent_districts_id=dis.id";
$res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($res2);

$sql6="SELECT * FROM subjects WHERE student_id='$s_id'";
$res6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($res6);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="shortcut icon" type="image" href="img/logo2.png">
    <title>Admission Form </title>
</head>
<body onload="window.print()">
  <!-- <body> -->


    <div class="main">
<div class="div2 ar"><img src="img/bgovt.png"> </div> 
<div class="div1 ar">
        <p>APPLICATION FORM FOR MEDICAL COLLEGE’S GOVERNMENT OF THE BALOCHISTAN <br>
            ACADEMIC SESSION: <?php echo $row1['academic'];?>
            </p>
</div>    
<div class="div3 ar"><img src="img/bmc.jpg"> </div> 
<br><br>
<div class="table1">
    <table>
    <tr>
        <td><b>Division:</b> <?php echo $row2['div_name']; ?></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td><b>Form ID: </b> <?php echo "bmc"."21".$s_id; ?></u></td> 
    </tr> 

    <tr>
    <td><b>District: </b><?php echo $row2['district_name']; ?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;</td>
        <td><b>Mdcat Roll#:</b> <?php echo $row1['mdcat_roll_no'];?></td>
</tr>
<tr>
    <td><b>Reserved Category: </b><?php echo $row2['district_name']; ?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;</td>
        <td><b>Academic Session:</b> <?php echo $row1['academic'];?></td>
</tr>
    </table>
</div>
<!-- 2nd div -->
<div class="ab">
    <p>PLEASE FILL ALL COLUMNS IN CAPITAL LETTERS IN OWN WRITING WITH BLACK FOUNTAIN PEN </p>
</div> <br> 
<!-- 2nd table -->
<div class="table2">
    <div class="pic"><img src="<?php echo $row1['profile_pic'];?>" width="120px" height="120px"></div><br><br><br>
    <h4 style="margin-left:80px;">Applied For: <?php echo $row1['program'];?>
     <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    MBBS<input type="checkbox" >
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    BDS<input type="checkbox"></h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
</div><br>
<div class="table3">
    <h5 style="margin-left:80px;"><b>SEAT CATEGORY:</b> <?php echo $row1['title'];?></u>
  
</div> <br><br> <br>

<div style="border:1px solid black; text-align:center;padding:5px;background-color: lightblue; box-sizing: border-box;font-weight:bolder;font-size:15px;">PERSONAL INFORMATION</div><br><br>
<div class="info_details">
<table class="pinfo"  style="padding:5px;border-spacing: 0px 10px;">
  <tr>
    <td ><b>Name:</b> <?php echo $row1['name'];?></td>
    <td><b>Gender:</b>  <?php echo $row1['gender'];?></td>
    <td><b>Religion:</b>  <?php echo $row1['religion'];?></td>
    <!-- <td>AGE: <u style="font-size:15px;"><b> <?php echo $row1['age']." years";?></b></u></td> -->
</tr>


  <tr>
  <td><b>Age:</b>  <?php echo $row1['age']." years";?></td>
  <td ><b>Date Of Birth: </b> <?php echo $row1['date_of_birth'];?></td>
  <td ><b>Candidate's CNIC:</b>  <?php echo $row1['cnic'];?></td>
  

 
  </tr>
  
  <tr>
    <td><b>Father's CNIC:</b>  <?php echo $row1['father_cnic'];?></td>
    <td><b>Father Occupation:</b> <b> <?php echo $row1['father_occupation'];?></b></td>
   
    <td><b>Father Name:</b> <?php echo $row1['father_name'];?></td>
   
  </tr>
 
  <tr>
  <td colspan="3"> <b>Employer's Address: </b> <?php echo $row1['employer_address'];?></td>
  </tr>
  
  <tr>
  <td colspan="2"><b>Home District:</b> <?php echo $row2['district_name'];?></td>
  <td colspan="2"><b>Division:</b> <?php echo $row2['div_name'];?></td>
  </tr>
  
  <tr>
    <td> <b>Domicile #:</b> <?php echo $row1['domicile_no'];?></td>
    <td><b>Date of Issue:</b> <?php echo $row1['date_of_issue'];?></td>
    <td><b>Father /Domicile #: </b> <?php echo $row1['father_domicile'];?></td>
   
</tr> 

  <tr>
  <td colspan="3"><b>Present Mailing Address:  </b> <?php echo $row1['present_address']." ".$row1['district_name']." ".$row1['div_name'];?></td>
  </tr>
 

  <tr>
  <td colspan="3"><b>Present Mailing Address:</b> <?php echo $row2['permanent_address']." ".$row2['district_name']." ".$row2['div_name'];?></td>
  </tr>

  <tr>
  <td><b>Contact #:</b>  <?php echo $row1['landline_no'];?> </td>
  <td><b>Cell#: </b> <?php echo $row1['cell_no'];?></td>
  <!-- <td>WHATSAPP NO.: <u style="font-size:15px;"> <?php echo $row1['whatsapp_no'];?></u></td> -->
  <td><b>Email ID:</b> <?php echo $row1['email_id'];?></td>
  </tr>
</table>

</div><br><br>


<!-- next div -->
<div class="exams">
   <div style="border:1px solid black; text-align:center;padding:5px;background-color: lightblue; box-sizing: border-box;font-weight:bolder;">EXAMINATIONS PASSED</div><br><br>
   <table>
    <tr style="background-color:lightblue;">
      <th>NAME OF EXAMINATION </th>
      <th>ACADEMIC PASSING YEAR</th>
      <th>ANNUAL / BI-ANNUAL</th>
      <th>TOTAL MARKS</th>
      <th>MARKS OBTAINED</th>
      <!-- <th>PERCENTAGE</th> -->
      <th>MAJOR SUBJECT.</th>
      <th>NAME OF BOARD OR UNIVERSITY</th>
    </tr>
    <?php

$sql3="SELECT * FROM edu_details ed,degree d Where student_id='$s_id' AND ed.degree_id=d.id";
$res3=mysqli_query($conn,$sql3);

              while($row3=mysqli_fetch_assoc($res3)){
                      echo "<tr>";
                      echo "<td>".$row3['deg_name']."</td>";
                      echo "<td>".$row3['passing_year']."</td>";
                      echo "<td>".$row3['annual_biannual']."</td>";
                      echo "<td>".$row3['total_marks']."</td>";
                      echo "<td>".$row3['obtained_marks']."</td>";
                      // echo "<td>".$row3['percentage']."</td>";
                      echo "<td>".$row3['subjects_id']."</td>";
                      echo "<td>".$row3['board_name']."</td>";
                      echo "</tr>";
                  }
    ?>
    
  </table><br><br>
  <div>
  REGISTRATION NO: <u style="font-size:15px;"> <b><?php echo $row1['registration_no'];?></b></u>____  BOARD OF SECONDARY EDUCATION OF <u style="font-size:15px;"> <b><?php echo $row1['board'];?></b></u></div>
</div><br><br>

<p style="page-break-after: always;">&nbsp;</p><br><br><br>

<div class="subject">
<div style="border:1px solid black; background-color: lightblue;text-align: center;"><b>FSC   SUBJECT  MARKS</b> </div><br>
    <table>
        <tr style="background-color:lightblue;">
          <th>Subject</th>
          <th>Obtained Marks</th>
          <th>Total Marks</th>
          <th>Percentage</th>


        </tr>

        <tr>
          <td>Chemistry</td>
          <td><?php echo $row6['c_obt'];?></td>
          <td><?php echo $row6['c_total'];?></td>
          <td><?php echo $row6['c_per'];?></td>
        </tr>

        <tr>
          <td>Physics</td>
          <td><?php echo $row6['p_obt'];?></td>
          <td><?php echo $row6['p_total'];?></td>
          <td><?php echo $row6['p_per'];?></td>
        </tr>
        <tr>
          <td>Biology</td>
          <td><?php echo $row6['b_obt'];?></td>
          <td><?php echo $row6['b_total'];?></td>
          <td><?php echo $row6['b_per'];?></td>
        </tr>

        <tr>
          <td>Mathematics</td>
          
          <td><?php echo $row6['m_obt'];?></td>
          <td><?php echo $row6['m_total'];?></td>
          <td><?php echo $row6['m_per'];?></td>
        </tr>

    </table>

</div>
<br><br>

<div class="challan">
    <div style="border:1px solid black; background-color: lightblue;text-align: center;"><b>BANK FEE CHALAN DETAIL</b> </div><br>
    <table>
        <tr style="background-color:lightblue;">
          <th>CHALLAN NO</th>
          <th>BANK NAME</th>
          <th>BANK BRANCH CODE</th>
          <th>BANK LOCATION</th>
          <th>DEPOSIT DATE</th>
          <th>AMOUNT (RS)</th>
          
        
        </tr>
        <?php
        $sql5="SELECT * FROM challan_details Where student_id='$s_id'";
        $res5=mysqli_query($conn,$sql5);

              while($row5=mysqli_fetch_assoc($res5)){
                      echo "<tr>";
                      echo "<td>".$row5['challan_no']."</td>";
                      echo "<td>".$row5['bank_name']."</td>";
                      echo "<td>".$row5['branch_code']."</td>";
                      echo "<td>".$row5['bank_location']."</td>";
                      echo "<td>".$row5['deposit_date']."</td>";
                      echo "<td>".$row5['amount']."</td>";
                      
                      echo "</tr>";
                  }
        ?>
       
      </table>
</div><br>
<!-- <p style="page-break-after: always;">&nbsp;</p> -->
<!-- instructions -->
<div style="border:1px solid black; background-color: lightblue;text-align: center;"><b>REQUIRED ATTESTED DOCUMENTS 
</b> </div><br>
<div>
1.	Matriculation pass certificate/ Equivalence Certificate  <br>
2.	Matriculation Marks Sheet or ‘O’ Level Equivalence Certificate issued by IBCC.<br>
3.	Intermediate Science (Pre-Medical) Marks Sheet and pass Certificate or “A” level (Pre-Medical)
Equivalence certificate by IBCC with Transcript Certificate.<br>
4.	National Identity Card from NADRA “B” Form of candidate (as applicable)<br>
5.	Local /Domicile Certificate of Candidate issued by authorized District Magistrate / Deputy Commissioner.
National Identity Card of Father/Mother from NADRA (Incase of Death of Father or Divorce).<br>
6.	Affidavit on Non-Judicial Stamp paper only attested by 1st Class Magistrate with a statement that the candidate his father/ guardian possesses only one Local Domicile.<br>
7.	Character Certificate from Grade-17 or above Government Officer or Principal/ Head of last attended Institution.<br>
8.	Candidates from Quetta Rural would produce/ submit a Certificate from Deputy Commissioner (D.C Quetta).
With confirmation that the candidate is applying against / for reserved seat of Quetta Rural Area.<br>
9.	Four (04) recent passport size photograph with white or blue background.<br>
10.	MDCAT Result Copy.
</div>

<div style="border:1px solid black; background-color: lightblue;text-align: center;"><b>DECLARATION OF CHOICE /PREFERENCE</b> </div><br>
<h3 style="text-decoration: underline;">VERY IMPORTANT</h3><br>
<div>
    a)	List up the priority of colleges in the order you would like to be considered for admission.<br>
b)	Preference once given shall be final and cannot be changed subsequently. Think carefully before writing. <br>
c)	 Do not use abbreviations. Cutting / erasing / over writing.<br>
d)	 The applicant will never be considered for college which he/she has not opted in the list of choices.  The Admission   <br>  
         Committee   shall   not assign a college by itself if the alternate choices are not indicated. The choice of Medical  
         Institution once opted by     a candidate will not be changed in any circumstances.
</div> <br> <br> 

<div style="border:1px solid black; background-color: lightblue;text-align: center;"><b>OPITION FOR ADIMISSION IN DENTAL COLLEGE/ INSTITUTION IN BALOCHISTAN AND SINDH</b> </div><br>
<div style="text-align: justify;">Dow University of Medical & Health Sciences, Karachi, Liaquat University of Medical & Health Sciences Jamshoro, & Bolan Dental College, Quetta.</div><br>
<div class="bds"><table>
    <tr style="background-color:lightblue;">
      <th>Choice No</th>
      <th>Name of the Medical College/ Institution BDS </th>
      <th>Abbreviation</th>
      <th>Signature of the Applicant</th>
    </tr>

    <?php
              include('connect.php');
              $sql4="SELECT * FROM bds_colleges c, bds_priorities p WHERE student_id='$s_id' AND p.college_id=c.id ORDER BY p.priority";
              $res4=mysqli_query($conn,$sql4);
                  while($row4=mysqli_fetch_assoc($res4)){
                      echo "<tr><td>".$row4['priority']."</td><td>".$row4['bds_colg']."</td><td>".$row4['abbr']."</td><td></td></tr>";
                        }
                 
            ?>
        

</table></div><br><br>
<p style="page-break-after: always;">&nbsp;</p><br><br>


<div style="border:1px solid black; background-color: lightblue;text-align: center;"><b>OPTION FOR ADMISSION IN THE MEDICAL INSTITUTIONS IN PUNJAB, SINDH, <br> AJ&K & BALOCHISTAN (IN ALPHABETICAL ORDER)</b> </div><br>
<div class="choices">
    <table>
        <tr>
          <th>Choice No</th>
          <th>Name of the Medical College/ Institutions for MBBS </th>
          <th>Abbreviation</th>
          <th>Signature of the Applicant</th>
          <!-- <th>Choice No</th>
          <th>Name of the Medical College/ Institutions for MBBS </th>
          <th>Signature of the Applicant</th> -->
        </tr>
            <?php
              include('connect.php');
              $sql4="SELECT * FROM colleges c, mbbs_priorities p WHERE student_id='$s_id' AND p.college_id=c.id ORDER BY p.priority";
              $res4=mysqli_query($conn,$sql4);
                  while($row4=mysqli_fetch_assoc($res4)){
                      echo "<tr><td>".$row4['priority']."</td><td>".$row4['colg_name']."</td><td>".$row4['abbr']."<td></td></tr>";
                        }
                 
            ?>
        
      </table>
</div><br>



<div style="text-align: justify;">
    <p>I, ___________________________S/D/ward of _______________________, an applicant for admission to the 1st year MBBS/BDS in above mentioned Medical /Dental Colleges, hereby agree that if admitted shall abide by rules and regulations in-force in BMC Prospectus at present or those that may be made thereafter so long I am a student of the College /University.  I will do nothing either in – or out-side the College that may interfere with its administration and discipline or may bring the College into disrepute.</p>
</div><br> 
<div class="signature">
  <table>
    <tr>
      <td>______________________________<br><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Name of Applicant</b></p></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <!-- <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> -->

        <td>
        ______________________________<br><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Signature of Applicant</b></p>
      </td>
      <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
  </table>
</div><br>
<div class="thumb">

  <div style="width:200px; height:80px; border:1px solid black; box-sizing:border-box; padding:5px; text-align:center;left:76.5%;position:relative;">Thumb impression</div>
</div>
<br>
<p style="page-break-after: always;">&nbsp;</p>



</div>

   <!-- <h4><a href="download.php?file=admission_form.php">Download File Form Here</a></h4> -->
    
</body>
</html>
<?php
}
else{
    // alert('try again incorrect form id');
 
echo '<script>alert("try again incorrect form id")</script>';



}
?>


