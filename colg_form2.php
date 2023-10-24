
<div class="row">
    <form action="college_choices.php" method="POST">
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
                            // $s_id=$_SESSION['id'];
                           
                            $sql="SELECT * FROM colleges c where c.id NOT IN (select college_id from mbbs_priorities where student_id='$s_id')";
                            $result=mysqli_query($conn,$sql);
                            // $rowcount=mysqli_num_rows($result);
                            //  for ($i=1;$i<=$rowcount;$i++){
                                
                            //  }
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option value='".$row['id']."'>".$row['colg_name']."</option>" ;
                                }
                            }
                            ?>
                        </td>
                        <td>
                        <select name="priority" class="form-control" required>
                            <option>Select priority</option>
                            <?php
                            // $s_id=$_SESSION['id'];
                            $sql="SELECT * FROM m_priority where priority_no NOT IN (select priority from mbbs_priorities where student_id='$s_id')";
                            $result=mysqli_query($conn,$sql);
                            // $rowcount=mysqli_num_rows($result);
                            //  for ($i=1;$i<=$rowcount;$i++){
                                
                            //  }
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<option value='".$row['priority_no']."'>".$row['priority_no']."</option>" ;
                                }
                            }
                            ?>





                        <?php
                        // for ($i=1;$i<20;$i++){
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
