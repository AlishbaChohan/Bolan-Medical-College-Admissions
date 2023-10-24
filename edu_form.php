
<div class="row bg-white">
            <div class="col">
                <div class="fc2" style="width:96%;"><br>
                    <span class=" h4 text-start text-success text-uppercase p-2" >Educational Information:</span><br><br>
                    <!-- <span class=" text-start p-2" >Carefully add your eductional details.</span><br><br> -->
                    <div class="form2">
                        <form action="education.php" method="POST">
                            <div class="row">
                                <div class="col-sm  table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name of examination</th>
                                                <th>Academic Passing Year</th>
                                                <th>Annual/Bi-Annual</th>
                                                <th>Total Marks</th>
                                                <th>Marks Obtained</th>
                                                <!-- <th>Percentage</th> -->
                                                <th>Major Subjects</th>
                                                <th>Name of Board/University</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 
                                                    <select name="degree1" id="degree" class="form-control" required> 
                                                    <option> Select a degree</option>
                                                    <?php
                                                    include('connect.php');
                                                    $sql="SELECT * FROM degree";
                                                    $result=mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)>0){
                                                        while($row=mysqli_fetch_assoc($result)){
                                                            echo "<option value='".$row['id']."'>".$row['deg_name']."</option>" ;
                                                        }
                                                    }
                                                    ?>
                                                    </select>
                                                 </td>
                                                <td> <input type="text" class="form-control"  name="apy1"></td>
                                                <td><input type="text" class="form-control" name="ab1"></td>
                                                <td><input type="text" class="form-control" name="t1"></td>
                                                <td><input type="text" class="form-control"  name="ob1"></td>
                                                <!-- <td><input type="text" class="form-control" name="p1"></td> -->
                                                <td><input type="text" class="form-control" name="sub1"></td>
                                                <td><input type="text" class="form-control" name="board1"></td>
                                                <td><input type="submit" class="btn btn-primary btn-sm" name="submit"></td>
                                                

                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <?php
                                    include("eduquery.php");
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                <div class="table-responsive">
                                <?php
                                    $s_id=$_SESSION['id'];
                                    // $s_id=1;
                                    $sql2="SELECT * FROM edu_details ed,degree d Where student_id='$s_id' AND ed.degree_id=d.id";

                                    $res=mysqli_query($conn,$sql2);
                                    echo "<br><br><table class='table table-striped'>";
                                    echo "    
                                            <thead>
                                            <tr>
                                                <th>Name of examination</th>
                                                <th>Academic Passing Year</th>
                                                <th>Annual/Bi-Annual</th>
                                                <th>Total Marks</th>
                                                <th>Marks Obtained</th>
                                               
                                                <th>Major Subjects</th>
                                                <th>Name of Board/University</th>
                                            </tr>
                                            </thead>
                                            <tbody>";

                                    while($row=mysqli_fetch_assoc($res)){
                                        echo "<tr>";
                                        echo "<td>".$row['deg_name']."</td>";
                                        echo "<td>".$row['passing_year']."</td>";
                                        echo "<td>".$row['annual_biannual']."</td>";
                                        echo "<td>".$row['total_marks']."</td>";
                                        echo "<td>".$row['obtained_marks']."</td>";
                                        // echo "<td>".$row['percentage']."</td>";
                                        echo "<td>".$row['subjects_id']."</td>";
                                        echo "<td>".$row['board_name']."</td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";
                                ?>
                                </table>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-sm text-end">
                                    <br> <br><br>
                                    <button class="btn btn-primary"> <a href="admin.php" class="text-decoration-none text-white">Previous</a> </button>
                                    <button class="btn btn-success"><a href="subjects.php" class="text-decoration-none text-white"> Next</a> </button>
                                </div>
                            </div>





                        </form>
                    </div>
                </div>  
              <br><br>
            </div>
        </div>
</div>