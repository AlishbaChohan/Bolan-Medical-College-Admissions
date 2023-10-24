<table>
  <tr>
    <td>NAME:  <u style="font-size:15px;"> <b><?php echo $row1['name'];?></b></u></td>
    <td>GENDER: <u style="font-size:15px;"> <?php echo $row1['gender'];?></u></td>
    <td>RELIGION: <u style="font-size:15px;"> <?php echo $row1['religion'];?> </u></td>
    <td>AGE: <u style="font-size:15px;"> <?php echo $row1['age']." years";?></u></td>
    </tr>
  <tr>
  <td>DATE OF BIRTH: <u style="font-size:15px;"> <?php echo $row1['date_of_birth'];?></u></td>
  <td>CANDIDATE’S CNIC: <u style="font-size:15px;"> <?php echo $row1['cnic'];?></u></td>
  <td>FATHER NAME: <u style="font-size:15px;"> <?php echo $row1['father_name'];?></u></td>
  <td>FATHER’S CNIC: <u style="font-size:15px;"> <?php echo $row1['father_cnic'];?></u></td>
  </tr>
  <tr>
    <td>OCCUPATION: <u style="font-size:15px;"> <?php echo $row1['father_occupation'];?></u></td>
    <td>EMPLOYER’S ADDRESS: <u style="font-size:15px;"> <?php echo $row1['employer_address'];?></u></td>
    <td>HOME DISTRICT: <u style="font-size:15px;"> <?php echo $row2['district_name'];?></u></td>
    <td>DIVISION: <u style="font-size:15px;"> <?php echo $row2['div_name'];?></u></td>
  </tr>

  <tr>
    <td>LOCAL / DOMICILE NO.: <u style="font-size:15px;"> <?php echo $row1['domicile_no'];?></u></td>
    <td>DATE OF ISSUE: <u style="font-size:15px;"> <?php echo $row1['date_of_issue'];?></u></td>
    <td>FATHER / GUARDIAN -LOCAL / DOMICILE NO: <u style="font-size:15px;"> <?php echo $row1['father_domicile'];?></u></td>
   <td>PRESENT MAILING ADDRESS:  <u style="font-size:15px;"> <?php echo $row1['present_address']." ".$row1['district_name']." ".$row1['div_name'];?></u></td>
  <tr> 
  
  <td>PERMANENT MAILING ADDRESS: <u style="font-size:15px;"> <?php echo $row2['permanent_address']." ".$row2['district_name']." ".$row2['div_name'];?> </u></td>
  <td>CONTACT NO./LANDLINE NO: <u style="font-size:15px;"> <?php echo $row1['landline_no'];?> </u></td>
  <td>CELL NO.: <u style="font-size:15px;"> <?php echo $row1['cell_no'];?></u></td>
  <!-- <td>WHATSAPP NO.: <u style="font-size:15px;"> <?php echo $row1['whatsapp_no'];?></u></td> -->
  <td>EMAIL ID: <u style="font-size:15px;"> <?php echo $row1['email_id'];?></u></td>
  </tr>
</table>