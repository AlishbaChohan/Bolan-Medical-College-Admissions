<?php
include('connect.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    // 
    $dist_id=$_POST['id'];
    // $dist_id=20;
    // echo "test 1<br>";
    $sql="SELECT * FROM districts d, student_info s 
    Where d.id='$dist_id'
    -- AND s.id=c.student_id 
    AND s.permanent_districts_id=d.id 
    AND s.status='active'
    
    
    -- ORDER BY challan_no
    ";
    
    $res=mysqli_query($conn,$sql);
    $data="";
    $sr=1;
    //  echo mysqli_fetch_assoc($res);
    // echo "test 2<br>";
if (mysqli_num_rows($res)>0){
    // echo "test 3<br>";
    echo "<table> 
     
    <tr class='bg'><th>Sr.no</th><th>Student Name</th><th>Challan no</th><th>Form ID </th><th>District</th></th><th>Action</th></tr>";
    while($row=mysqli_fetch_assoc($res)){

        $student_id=$row['id'];
        
        echo "
        <tr>
        <td>{$sr}</td>
        <td>{$row['name']}</td>";

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

        // <td>{$row['challan_no']}</td>
        echo "<td> bmc21{$row['id']}</td>
        <td>{$row['district_name']}</td>
        <td><button class='del' data-id='{$row["id"]}'>Delete </button></td>
        </tr>";
        $sr++;
    }

    echo "</table>";
    // echo "test 4<br>";

    // echo mysqli_error($conn);
    // echo $data;
    
    
}
else{
    echo mysqli_error($conn);
    // echo "test 5";
}
    // echo"</table>";
}
?>