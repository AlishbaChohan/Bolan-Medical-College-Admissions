<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<style>
        .rec{
            width:90%;
            margin:auto;
            /* border:2px solid black; */
            text-align: center;
        }

        table ,tr,td,th{
            /* border:2px solid black; */
        }

        table{
            /* border-collapse:collapse; */
            width:70%;
            /* left:5%; */
            position:relative;
            margin-top:20px;
            margin-bottom:20px;
        }
        /* .bg{
            background-color:lightblue;
            width:100%;
            margin:auto;
        } */

        
    </style>
<body>
    <div class="rec">
<!-- <table id='example'> 
        <thead>
           <tr class='bg'>
           <th>Sr.no</th>
           <th>Student Name</th>
           <th>Father Name</th>
           <th>Form ID </th>
           
          

           <th>Chemistry Obtained</th>
           <th>Chemistry Total</th>
           <th>Biology Obtained</th>
           <th>Biology Total</th>
           <th>Physics Obtained</th>
           <th>Physics Total</th>


           <th>Sub.obt</th>
           <th>Sub.total</th>
           <th>Sub.perc</th>

           <th>MDCAT Obtained </th>
           <th>MDCAT Total </th>
           <th>MDCAT Percentage</th>
           
           
           <th>Final Score</th>
              <th>Seat Category</th>

</tr><th>Sr.no</th>
               
           </thead> -->
    <?php
    include("connect.php");
        echo "<table id='example'> 
        <thead>
           <tr class='bg'>
           
           <th>Student Name</th>
           <th>Father Name</th>
           <th>Form ID </th>
           
          

           <th>Chemistry Obtained</th>
           <th>Chemistry Total</th>
           <th>Biology Obtained</th>
           <th>Biology Total</th>
           <th>Physics Obtained</th>
           <th>Physics Total</th>


           <th>Sub.obt</th>
           <th>Sub.total</th>
           <th>Sub.perc</th>

           <th>MDCAT Obtained </th>
           <th>MDCAT Total </th>
           <th>MDCAT Percentage</th>
           
           
           <th>Final Score</th>
              <th>Seat Category</th>

           </tr></thead>";
           
   
    $sql5="Select * from seat_reservation sr ,student_info si where si.permanent_districts_id='0' 
   and si.seat_reservation_id='1'
   and sr.id=si.seat_reservation_id
   and si.status='active'
   Order BY si.status";
   
    $res5=mysqli_query($conn,$sql5);
    $sr=1;
    echo"<tbody>";
    if (mysqli_num_rows($res5)>0 ){
       while($row5=mysqli_fetch_assoc($res5)){

           $student_id=$row5['id'];
           
           echo "<tr>";
        //  echo "<td>".$sr."</td>";
         echo "<td style='text-transform: uppercase; text-align: left; '>".$row5['name']."</td>"."<td style='text-transform: uppercase; text-align: left;'>".$row5['father_name']."</td>"."<td>bmc21"."$student_id"."</td>";



         $sql6="Select * from challan_details where student_id='$student_id'";
         $res6=mysqli_query($conn,$sql6);

       //   if(mysqli_num_rows($res6)>0){
       //       while ($row6=mysqli_fetch_assoc($res6)){
       //       echo "<td>".$row6['challan_no']."</td>";
       //         }

       //   }
       //   else{
       //       echo "<td></td>";
       //   }

        

       //   $sql7="Select * from edu_details ed where ed.student_id='$student_id' and ed.degree_id='2'";
           
       //     $res7=mysqli_query($conn,$sql7);
           
       //     if(mysqli_num_rows($res7)>0){
       //         while($row7=mysqli_fetch_assoc($res7)){
                   
       //             echo "<td>".$row7['obtained_marks']." </td>"."<td>".$row7['total_marks']." </td> ";
       //         }
       //     }

       //     else{
       //         echo "<td></td><td></td>";
       //     }


           $sql8="SELECT * FROM subjects where student_id='$student_id' ";
           $res8=mysqli_query($conn,$sql8);
           if(mysqli_num_rows($res8)>0){
               while($row8=mysqli_fetch_assoc($res8)){

                   $c_obt=$row8['c_obt'];
                   $c_total=$row8['c_total'];

                   $b_obt=$row8['b_obt'];
                   $b_total=$row8['b_total'];

                   $p_obt=$row8['p_obt'];
                   $p_total=$row8['p_total'];

                   $s_obt=$p_obt+$b_obt+$c_obt;
                   $s_total=$p_total+$b_total+$c_total;
                   $s_per=($s_obt/$s_total)*100;
                   $s_round=round($s_per,2);
                   
                   echo "<td>".$c_obt." </td>";
                   echo "<td>".$c_total." </td>";

                   echo "<td>".$b_obt." </td>";
                   echo "<td>".$b_total." </td>";

                   echo "<td>".$p_obt." </td>";
                   echo "<td>".$p_total." </td>";

                   // echo "<td>".$row8['m_obt']." </td>";
                   // echo "<td>".$row8['m_total']." </td>";

                   echo "<td>".$s_obt." </td>";
                   echo "<td>".$s_total." </td>";
                   echo "<td>".$s_round." %</td>";
               
               }
           }
           else{
               echo "
               <td></td><td></td>
               <td></td><td></td>
               <td></td><td></td>
               
               <td></td><td></td>
               <td></td>
               ";
           }

            $sql9="Select * from edu_details ed where ed.student_id='$student_id' and ed.degree_id='3'";
           
            $res9=mysqli_query($conn,$sql9);
            if(mysqli_num_rows($res9)>0){
               while($row9=mysqli_fetch_assoc($res9)){
                   $m_obt=$row9['obtained_marks'];
                   $m_total=$row9['total_marks'];
                   $m_per=($m_obt/$m_total)*100;
                   $m_round=round($m_per,2);
                   echo "<td>".$m_obt."</td><td>".$m_total."</td> <td>".$m_round."%</td>";
               }
           }
           else{
               echo "<td></td><td></td><td></td>";
           }

           // echo "<td>".$row5['mdcat_roll_no']."</td>";
           
           
           echo "<td>".(($m_round+$s_round)/2)."%</td>";
            echo "<td>".$row5['title']."</td>";

           


           







         echo "</tr>";
       
        $sr++;
       } echo"</tbody>";
    }
     echo "</table>";
   
//    }
    ?>
    </table>
    </div>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>