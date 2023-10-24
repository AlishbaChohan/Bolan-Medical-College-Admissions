<?php
include("connect.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
//edu variables

$s_id=$_SESSION['id'];
// $s_id=1;
$c_obt= $_POST['c_obt'];
$c_total= $_POST['c_total'];
$p1=(intval($c_obt)/intval($c_total))*100;
$c_per= round($p1,2);

$p_obt= $_POST['p_obt'];
$p_total= $_POST['p_total'];
$p2=(intval($p_obt)/intval($p_total))*100;
$p_per= round($p2,2);

$b_obt= $_POST['c_obt'];
$b_total= $_POST['c_total'];
$p3=(intval($b_obt)/intval($b_total))*100;
$b_per= round($p3,2);

$m_obt= $_POST['m_obt'];
$m_total= $_POST['m_total'];
$p4=(intval($m_obt)/intval($m_total))*100;
$m_per= round($p4,2);

$sql="SELECT * FROM subjects WHERE student_id='$s_id'";
        $res=mysqli_query($conn,$sql);
        // while($row=mysqli_fetch_assoc($res))
        //                 {
        //                     echo $row['challan_no'];
        //                 }

        if(mysqli_num_rows($res)>=1){

                        $sql2="UPDATE subjects SET c_obt='$c_obt', c_total='$c_total',c_per='$c_per',p_obt='$p_obt', p_total='$p_total',p_per='$p_per',
                        b_obt='$b_obt', b_total='$b_total',b_per='$b_per', m_obt='$m_obt', m_total='$m_total',m_per='$m_per' WHERE student_id='$s_id'";
                            $res2=mysqli_query($conn,$sql2);
                        if($res2){
                            // echo " <span style='color:green;text-align:center;'>Your information has been updated</span>";
                        header("Location:mdcat.php");
                    }
                    else{
                        echo mysqli_error($conn);
                    }
        }

        elseif(mysqli_num_rows($res)==0) { 
        $sql3 = "INSERT INTO subjects 
        (student_id,c_obt,c_total,c_per,p_obt,p_total,p_per,b_obt,b_total,b_per,m_obt,m_total,m_per)
        VALUES ('$s_id','$c_obt','$c_total','$c_per','$p_obt','$p_total','$p_per','$b_obt','$b_total','$b_per','$m_obt','$m_total','$m_per')
        ";
            $res3=mysqli_query($conn,$sql3);
            if($res3){
            header("Location:mdcat.php");

        }

        }

        else{
                echo mysqli_error($conn);
            //  echo "0nrecords";
        }

        }
                                    ?>
