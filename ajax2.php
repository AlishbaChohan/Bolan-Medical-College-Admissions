<?php
include('connect.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    // 
    $dist_id=$_POST['id'];
    $cat_id=$_POST['cat'];
    // $dist_id=20;
    // echo "test 1<br>";
    if ($cat_id==0)
    {
    $sql="SELECT * FROM districts d, challan_details c, seat_reservation sr, student_info s 
    Where d.id='$dist_id'
    AND s.id=c.student_id 
    AND s.permanent_districts_id=d.id 
    AND s.seat_reservation_id=sr.id 
    AND s.status='active'
   
    
    ORDER BY challan_no";
    
    $res=mysqli_query($conn,$sql);
    $data="";
    $sr=1;
    //  AND (LENGTH(challan_no)=4 or LENGTH(challan_no)=5)
    //  echo mysqli_fetch_assoc($res);
    // echo "test 2<br>";
if (mysqli_num_rows($res)>0){
    // echo "test 3<br>";
    echo "<table> 
     
    <tr class='bg'><th>Sr.no</th><th>Student Name</th><th>Father Name</th><th>Challan no</th><th>Form ID </th><th>Seat Category </th><th>District</th></tr>";
    while($row=mysqli_fetch_assoc($res)){
        
        echo ucwords("
        <tr>
        <td>{$sr}</td>
        <td>".ucwords($row['name'])."</td>
        <td>".ucwords($row['father_name'])."</td>
        <td>{$row['challan_no']}</td>
        <td> bmc21{$row['id']}</td>
        <td>{$row['title']}</td>
        <td>{$row['district_name']}</td>
        </tr>");
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

    }


    else
    {
    $sql="SELECT * FROM districts d, challan_details c, seat_reservation sr, student_info s 
    Where d.id='$dist_id'
    AND s.id=c.student_id 
    AND s.permanent_districts_id=d.id 
    AND s.seat_reservation_id=sr.id 
    AND s.status='active'
    And seat_reservation_id='$cat_id'
   
    
    ORDER BY challan_no";
    
    $res=mysqli_query($conn,$sql);
    $data="";
    $sr=1;
    //  AND (LENGTH(challan_no)=4 or LENGTH(challan_no)=5)
    //  echo mysqli_fetch_assoc($res);
    // echo "test 2<br>";
if (mysqli_num_rows($res)>0){
    // echo "test 3<br>";
    echo "<table> 
     
    <tr class='bg'><th>Sr.no</th><th>Student Name</th><th>Father Name</th><th>Challan no</th><th>Form ID </th><th>Seat Category </th><th>District</th></tr>";
    while($row=mysqli_fetch_assoc($res)){
        
        echo "
        <tr>
        <td>{$sr}</td>
        <td>".ucwords($row['name'])."</td>
        <td>".ucwords($row['father_name'])."</td>
        <td>{$row['challan_no']}</td>
        <td> bmc21{$row['id']}</td>
        <td>{$row['title']}</td>
        <td>{$row['district_name']}</td>
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

    }

}
?>