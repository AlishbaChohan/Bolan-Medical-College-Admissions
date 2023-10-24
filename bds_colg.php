
<div class="row">
    <form action="college_choices2.php" method="POST">
        <div class="col-sm  table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name of College</th>
                        <th>Priority of College for Admission</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td> <select name="college" id="college" class="form-control" required> 
                            <option> Select a College</option>
                            <?php
                            include('connect.php');
                            $sql="SELECT * FROM bds_colleges c where c.id NOT IN (select college_id from bds_priorities where student_id='$s_id')";
                            $result=mysqli_query($conn,$sql);
                            // $rowcount=mysqli_num_rows($result);
                            //  for ($i=1;$i<=$rowcount;$i++){
                                
                            //  }
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option value='".$row['id']."'>".$row['bds_colg']."</option>" ;
                                }
                            }
                            ?>
                        </td>
                        <td>
                        <select name="priority" class="form-control" required>
                            <option>Select priority</option>

                            <?php
                            // $s_id=$_SESSION['id'];
                            $sql="SELECT * FROM b_priority where priority_no NOT IN (select priority from bds_priorities where student_id='$s_id')";
                            $result=mysqli_query($conn,$sql);
                          
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option value='".$row['priority_no']."'>".$row['priority_no']."</option>" ;
                                }
                            }
                            ?>

                        
                        <?php
                        // for ($i=1;$i<4;$i++){
                        //     echo "<option value='".$i."'>Priority no. ".$i."</option>";
                        // }
                        ?>
                        </select>
                        </td>
                        
                        <td><input type="submit" class="btn btn-primary btn-sm" name="submit"></td>
                        

                    </tr>
                    
                </tbody>
            </table>
        </div>
    </form>   
</div>
