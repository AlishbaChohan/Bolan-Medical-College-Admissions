<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">


<?php

include('connect.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    $dist_id=$_POST['id'];
    $cat_id=$_POST['cat'];
        

            if($cat_id==0){
                echo "<table id='example'> 
                <thead>
         
            <tr class='bg'>
           
            <th>Student Name</th>
            <th>Father Name</th>
            <th>Form ID </th>
            <th>District</th>
            
           

         
            <th>Sub.perc</th>

            
            <th>MDCAT Percentage</th>
            
            
            <th>Final Score</th>
            <th>Seat Category</th>

            <th>MBBS Choices</th>
            <th>BDS Choices</th>

            </tr></thead>";
            
    // $dist_id=$_POST['id'];
    // $cat_id=$_POST['cat'];
   $sql5="Select * from seat_reservation sr,student_info si 
   where si.permanent_districts_id='$dist_id'
    and sr.id=si.seat_reservation_id 

   
    and si.status='active'
    Order BY si.status";
    
     $res5=mysqli_query($conn,$sql5);
     $sr=1;
     echo"<tbody>";
     if (mysqli_num_rows($res5)>0 ){
        while($row5=mysqli_fetch_assoc($res5)){

            $student_id=$row5['id'];
            echo"<tr>";
        //   echo "<td>".$sr."</td>";
          echo "<td style='text-transform: uppercase; text-align: left; '>".$row5['name']."</td>"."<td style='text-transform: uppercase; text-align: left;'>".$row5['father_name']."</td>"."<td>bmc21"."$student_id"."</td>";

          $sql4="select * from districts where id='$dist_id'";
          $res4=mysqli_query($conn,$sql4);
          if(mysqli_num_rows($res4)>0){
            while ($row4=mysqli_fetch_assoc($res4)){
                echo "<td>".$row4['district_name']."</td>";
            }
        }

         





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
                    

                    echo "<td>".$s_round." %</td>";
                
                }
            }
            else{
               
                echo "<td></td>";
            }

             $sql9="Select * from edu_details ed where ed.student_id='$student_id' and ed.degree_id='3'";
            
             $res9=mysqli_query($conn,$sql9);
             if(mysqli_num_rows($res9)>0){
                while($row9=mysqli_fetch_assoc($res9)){
                    $m_obt=$row9['obtained_marks'];
                    $m_total=$row9['total_marks'];
                    $m_per=($m_obt/$m_total)*100;
                    $m_round=round($m_per,2);
                    // echo "<td>".$m_obt."</td><td>".$m_total."</td>";
                    echo " <td>".$m_round."%</td>";
                }
            }
            else{
                // echo "<td></td><td></td><td></td>";
                echo "<td></td>";
            }

            // echo "<td>".$row5['mdcat_roll_no']."</td>";
            
            
            echo "<td>".(($m_round+$s_round)/2)."%</td>";
            echo "<td>".$row5['title']."</td>";


            
            $sql3="Select * from mbbs_priorities mp, colleges c 
            where student_id='$student_id'
            and mp.college_id=c.id";
            $res3=mysqli_query($conn,$sql3);
  
            if(mysqli_num_rows($res3)>0){  
                echo "<td style='line-height:30px;'>";
                while ($row3=mysqli_fetch_assoc($res3)){
             
                echo "<b>(priority ".$row3['priority'].":</b> ".$row3['abbr']."<b>)</b> ";
              
                  }
               echo "</td>";
            }
            else{
                echo "<td></td>";
            }



          $sql6="Select * from bds_priorities bp, bds_colleges bc 
          where student_id='$student_id'
          and bp.college_id=bc.id";
          $res6=mysqli_query($conn,$sql6);

          if(mysqli_num_rows($res6)>0){  
               echo "<td > ";
              while ($row6=mysqli_fetch_assoc($res6)){
           
              echo "<b>(priority ".$row6['priority'].":</b> ".$row6['abbr']."<b>)</b> ";
            
                }
             echo "</td>";
          }
          else{
              echo "<td></td>";
          }


          echo "</tr>";
        
         $sr++;
        }
        echo"</tbody>";
     }
     
      echo "</table>";
            }
    else{
     echo "<table id='example'> 
         <thead>
            <tr class='bg'>
            
            <th>Student Name</th>
            <th>Father Name</th>
            <th>Form ID </th>
            <th>District</th>
            
           

         
            <th>Sub.perc</th>

            
            <th>MDCAT Percentage</th>
            
            
            <th>Final Score</th>
            <th>Seat Category</th>

            <th>MBBS Choices</th>
            <th>BDS Choices</th>

            </tr></thead>";
            
    
     $sql5="Select * from seat_reservation sr ,student_info si where si.permanent_districts_id='$dist_id' 
    and si.seat_reservation_id='$cat_id'
    and sr.id=si.seat_reservation_id
    and si.status='active'
    Order BY si.status";
    
     $res5=mysqli_query($conn,$sql5);
     $sr=1;
     echo"<tbody>";
     if (mysqli_num_rows($res5)>0 ){
        while($row5=mysqli_fetch_assoc($res5)){

            $student_id=$row5['id'];
            echo"<tr>";
        //   echo "<td>".$sr."</td>";
          echo "<td style='text-transform: uppercase; text-align: left; '>".$row5['name']."</td>"."<td style='text-transform: uppercase; text-align: left;'>".$row5['father_name']."</td>"."<td>bmc21"."$student_id"."</td>";

          $sql4="select * from districts where id='$dist_id'";
          $res4=mysqli_query($conn,$sql4);
          if(mysqli_num_rows($res4)>0){
            while ($row4=mysqli_fetch_assoc($res4)){
                echo "<td>".$row4['district_name']."</td>";
            }
        }

         





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
                    

                    echo "<td>".$s_round." %</td>";
                
                }
            }
            else{
               
                echo "<td></td>";
            }

             $sql9="Select * from edu_details ed where ed.student_id='$student_id' and ed.degree_id='3'";
            
             $res9=mysqli_query($conn,$sql9);
             if(mysqli_num_rows($res9)>0){
                while($row9=mysqli_fetch_assoc($res9)){
                    $m_obt=$row9['obtained_marks'];
                    $m_total=$row9['total_marks'];
                    $m_per=($m_obt/$m_total)*100;
                    $m_round=round($m_per,2);
                    // echo "<td>".$m_obt."</td><td>".$m_total."</td>";
                    echo " <td>".$m_round."%</td>";
                }
            }
            else{
                // echo "<td></td><td></td><td></td>";
                echo "<td></td>";
            }

            // echo "<td>".$row5['mdcat_roll_no']."</td>";
            
            
            echo "<td>".(($m_round+$s_round)/2)."%</td>";
            echo "<td>".$row5['title']."</td>";


            
            $sql3="Select * from mbbs_priorities mp, colleges c 
            where student_id='$student_id'
            and mp.college_id=c.id";
            $res3=mysqli_query($conn,$sql3);
  
            if(mysqli_num_rows($res3)>0){  
                echo "<td style='line-height:30px;'>";
                while ($row3=mysqli_fetch_assoc($res3)){
             
                echo "<b>(priority ".$row3['priority'].":</b> ".$row3['abbr']."<b>)</b> ";
              
                  }
               echo "</td>";
            }
            else{
                echo "<td></td>";
            }



          $sql6="Select * from bds_priorities bp, bds_colleges bc 
          where student_id='$student_id'
          and bp.college_id=bc.id";
          $res6=mysqli_query($conn,$sql6);

          if(mysqli_num_rows($res6)>0){  
               echo "<td > ";
              while ($row6=mysqli_fetch_assoc($res6)){
           
              echo "<b>(priority ".$row6['priority'].":</b> ".$row6['abbr']."<b>)</b> ";
            
                }
             echo "</td>";
          }
          else{
              echo "<td></td>";
          }


          echo "</tr>";
        
         $sr++;
        }
        echo"</tbody>";
     }
     
      echo "</table>";
    }
}
         

?>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>