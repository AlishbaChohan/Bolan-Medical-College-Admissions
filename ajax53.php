<?php

include('connect.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
//     // 
     echo "<table> 
         
            <tr class='bg'>
            <th>Sr.no</th>
            <th>Student Name</th>
            <th>Form ID </th>
            <th>Challan No. </th>
            <th>Fsc Obtained </th>
            <th>Fsc Total </th>

            <th>Chemistry Obtained</th>
            <th>Chemistry Total</th>
            <th>Biology Obtained</th>
            <th>Biology Total</th>
            <th>Physics Obtained</th>
            <th>Physics Total</th>
            <th>Math Obtained</th>
            <th>Math Total</th>

            <th>MDCAT Obtained </th>
            <th>MDCAT Total </th>
            <th>MDCAT Roll No.</th>

            <tr>";
            
    $dist_id=$_POST['id'];
    
    $sql5="Select * from student_info si where si.permanent_districts_id='$dist_id'
    Order BY si.id";
    
     $res5=mysqli_query($conn,$sql5);
     $sr=1;
     if (mysqli_num_rows($res5)>0 ){
        while($row5=mysqli_fetch_assoc($res5)){

            $student_id=$row5['id'];
            echo"<tr>";
          echo "<td>".$sr."</td>";
          echo "<td>".$row5['name']."</td>"."<td>bmc21"."$student_id"."</td>";



          $sql6="Select * from challan_details where student_id='$student_id'";
          $res6=mysqli_query($conn,$sql6);

          if(mysqli_num_rows($res6)>0){
               while ($row6=mysqli_fetch_assoc($res6)){
              echo "<td>".$row6['challan_no']."</td>";
                }

          }
          else{
              echo "<td></td>";
          }

         

          $sql7="Select * from edu_details ed where ed.student_id='$student_id' and ed.degree_id='2'";
            
            $res7=mysqli_query($conn,$sql7);
            
            if(mysqli_num_rows($res7)>0){
                while($row7=mysqli_fetch_assoc($res7)){
                    
                    echo "<td>".$row7['obtained_marks']." </td>"."<td>".$row7['total_marks']." </td> ";
                }
            }

            else{
                echo "<td></td><td></td>";
            }


            $sql8="SELECT * FROM subjects where student_id='$student_id' ";
            $res8=mysqli_query($conn,$sql8);
            if(mysqli_num_rows($res8)>0){
                while($row8=mysqli_fetch_assoc($res8)){
                    
                    echo "<td>".$row8['c_obt']." </td>";
                    echo "<td>".$row8['c_total']." </td>";

                    echo "<td>".$row8['b_obt']." </td>";
                    echo "<td>".$row8['b_total']." </td>";

                    echo "<td>".$row8['p_obt']." </td>";
                    echo "<td>".$row8['p_total']." </td>";

                    echo "<td>".$row8['m_obt']." </td>";
                    echo "<td>".$row8['m_total']." </td>";
                
                }
            }
            else{
                echo "
                <td></td><td></td>
                <td></td><td></td>
                <td></td><td></td>
                <td></td><td></td>
                ";
            }

             $sql9="Select * from edu_details ed where ed.student_id='$student_id' and ed.degree_id='3'";
            
             $res9=mysqli_query($conn,$sql9);
             if(mysqli_num_rows($res9)>0){
                while($row9=mysqli_fetch_assoc($res9)){
                    
                    echo "<td>".$row9['obtained_marks']."</td><td>".$row9['total_marks']."</td> ";
                }
            }
            else{
                echo "<td></td><td></td>";
            }

            echo "<td>".$row5['mdcat_roll_no']."</td>";


            







          echo "</tr>";
        
         $sr++;
        }
     }
     
     echo"</table>";
}
         


?>