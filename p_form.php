



<div class="row bg-white">
            <div class="col">
                <div class="fc2"><br>
                    <span class=" h4 text-start text-success text-uppercase p-2" >Personal Information</span><br><br>
                     <div class="form2">
                        <form action="prsquery.php" method="POST">
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                <label for="name"  class="form-label" > Name: </label><input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="col-sm-4 p-2">   
                                <label for="religion"  class="form-label" >Religion: </label><input type="text" name="religion" id="religion" class="form-control" required>
                            </div>
                            <div class="col-sm-4 p-2"> 
                                 <label for="" class="form-check-label">Gender: </label><br>
                                <input type="radio" name="gender" id="gender1" value="male" class="form-check-input" required><label for="gender1" >Male</label>
                                <input type="radio" name="gender" id="gender2" value="female" class="form-check-input" required><label for="gender2"> Female</label> 
                               
                            </div>
                      
                        </div>

                        <div class="row">
                            <div class="col-sm-4 p-2">
                                <label for="dateofbirth" class="form-label">Date of Birth: </label><input type="date" name="dateofbirth" id="dateofbirth" class="form-control" required>
                            </div>
                            <div class="col-sm-4 p-2">   
                                <label for="age"  class="form-label">Age: </label><input type="number" name="age" id="age" class="form-control" required>
                            </div>
                            <div class="col-sm-4 p-2"> 
                                <label for="cnic" class="form-label">CNIC:(with dashes) </label><input type="text" maxlength="15" name="cnic" id="cnic" class="form-control" required>
                            </div>
                      
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 p-2">
                                <label for="fathername"  class="form-label"> Father Name: </label><input type="text" name="fathername" id="fathername" class="form-control"  required>
                            </div>
                            <div class="col-sm-4 p-2">   
                                <label for="fathercnic"  class="form-label">Father CNIC: (with dashes) </label><input type="text" name="fathercnic" maxlength="15" id="fathercnic" class="form-control"  required>
                            </div>
                            <div class="col-sm-4 p-2"> 
                                <label for="father_occup"  class="form-label">Father Occupation: </label><input type="text" name="father_occup" id="father_occup" class="form-control"  required> 
                            </div>
                      
                        </div>

                        <div class="row">
                            <div class="col-sm  p-2">
                                <label for="employer_address"  class="form-label">Father Employer Address: </label><input type="text" name="employer_address" id="employer_address" class="form-control"  required>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-4 p-2">
                                <label for="domicile_no"  class="form-label">Domicile Number: </label><input type="text" name="domicile_no" id="domicile_no" class="form-control"  required>
                            </div>
                            <div class="col-sm-4 p-2">   
                                <label for="dateofissue"  class="form-label">Domicile Issue date: </label><input type="date" name="dateofissue" id="dateofissue" class="form-control"  required>
                            </div>
                            <div class="col-sm-4 p-2"> 
                                <label for="fatherdomicile"  class="form-label">Father Domicile: </label><input type="text" name="fatherdomicile" id="fatherdomicile" class="form-control"  required><br>
                            </div>
                      
                        </div>
                        <hr>
                        <div class="row">
                         <span class=" h4 text-start text-success text-uppercase p-2" >Address Information</span><br><br>
                            <div class="col-sm-6 p-2">
                                <label for="perm_div" class="form-label">Permenant Division: </label>
                                <select name="perm_div" id="perm_div" class="form-control"  required> 
                                    <option> Select a divison</option>
                                    
                                </select>
                            </div>
                            <div class="col-sm-6 p-2">   
                                <label for="perm_dist" class="form-label">Permenant District: </label>
                                <select name="perm_dist" id="perm_dist" class="form-control"  required> 
                                <option > Select a district</option>
                                   
                                </select>
                            </div>
                           
                        </div>

                        <div class="row">
                            <div class="col-sm  p-2">
                                <label for="perm_add" class="form-label">Permenant Address: </label>
                                <input type="text" name="perm_add" id="perm_add" class="form-control" required>
                            </div>
                        </div>
                            <hr>
                        
                        <div class="row">

                            <div class="col-sm-6 p-2">
                                <label for="pres_div" class="form-label">Present Division: </label>
                                <select name="pres_div" id="pres_div" class="form-control" required> 
                                    <option> Select a divison</option>
                                    <?php
                                    // include('connect.php');
                                    // $sql="SELECT * FROM divisions";
                                    // $result=mysqli_query($conn,$sql);
                                    // // $rowcount=mysqli_num_rows($result);
                                    // //  for ($i=1;$i<=$rowcount;$i++){
                                         
                                    // //  }
                                    // if(mysqli_num_rows($result)>0){
                                    //     while($row=mysqli_fetch_assoc($result)){
                                    //         echo "<option value='".$row['id']."'>".$row['div_name']."</option>" ;
                                    //     }
                                    // }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-6 p-2">   
                                <label for="pres_dist" class="form-label">Present District: </label>
                                <select name="pres_dist" id="pres_dist" class="form-control" id="dist2" required> 
                                    <option> Select a district</option>
                                    <?php
                                    // include('connect.php');
                                    // $sql="SELECT * FROM districts";
                                    // $result=mysqli_query($conn,$sql);
                                    // // $rowcount=mysqli_num_rows($result);
                                    // //  for ($i=1;$i<=$rowcount;$i++){
                                         
                                    // //  }
                                    // if(mysqli_num_rows($result)>0){
                                    //     while($row=mysqli_fetch_assoc($result)){
                                    //         echo "<option value='".$row['id']."'>".$row['district_name']."</option>" ;
                                    //     }
                                    // }
                                    ?>
                                </select>
                            </div>
                           
                        </div>

                        <div class="row">
                            <div class="col-sm  p-2">
                                <label for="pres_add" class="form-label">Present Address: </label><input type="text" name="pres_add" id="pres_add" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <span class=" h4 text-start text-success text-uppercase p-2" >Contact Information</span><br><br>
                            <div class="col-sm-3 p-2">
                                <label for="land_no" class="form-label">Landline No: </label><input type="text" name="land_no" id="land_no" class="form-control"  required>
                            </div>
                            <div class="col-sm-3 p-2">   
                                <label for="cell_no" class="form-label">Cell No: </label><input type="text" name="cell_no" id="cell_no" class="form-control" required>
                            </div>
                            <div class="col-sm-3 p-2"> 
                                <label for="whats_no" class="form-label">WhatsApp No: </label><input type="text" name="whats_no" id="whats_no" class="form-control" required>
                            </div>
                            <div class="col-sm-3 p-2"> 
                                <label for="email" class="form-label">Email: </label><input type="text" name="email" id="email" class="form-control" >
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <span class=" h4 text-start text-success text-uppercase p-2" >Category Information</span><br>
                            <div class="col-sm  p-2">
                            <label for="category"  class="form-label" > Seat Category: </label>
                                    <select name="category" id="category" class="form-control" required> 
                                    <option> Select seat category</option>
                                    <?php
                                    include('connect.php');
                                    $sql="SELECT * FROM seat_reservation";
                                    $result=mysqli_query($conn,$sql);
                                   
                                    if(mysqli_num_rows($result)>0){
                                        while($row=mysqli_fetch_assoc($result)){
                                            echo "<option value='".$row['id']."'>".$row['title']."</option>" ;
                                        }
                                    }
                                    ?>
                                    </select><br><br>
                                    <label for="program"  class="form-label" > Program Applied For: </label>
                                    <select name="program" id="program" class="form-control" required> 
                                    <option> Select Program</option>
                                    <option value="MBBS"> MBBS </option>
                                    <option value="BDS"> BDS</option>
                                    <option value="MBBS&BDS"> Both MBBS & BDS</option>
                                    </select><br>

                                    <label for="academic" class="form-label">Academic Session: </label><input type="text" name="academic" id="academic" class="form-control" required><br>
                            
                            </div>
                        </div>


                        
                        

                        <div class="row">
                        <!-- <div class="col-sm ">
                                <br>
                                <label class="text-danger">Please save the information before proceeding to next.</label> <br><br>
                                <?php 
                                // include("prsquery.php");
                                ?>
                            </div> -->
                            <div class="col-sm text-end">
                                <br>
                                <input type="submit" value="Next" class="btn btn-primary"><br><br>
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-sm text-end">
                                <br>
                                <button class="btn btn-success btn-sm"><a href="education.php" class="text-decoration-none text-white"> Next</a> </button>
                            </div>
                        </div> -->



                        <br>
        
                      
                    </div>
                </div>  
              <br><br>
            </div>
                                </div>

