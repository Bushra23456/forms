<?php
include("connection.php");
include("header.php");
$sql = "SELECT * FROM role";
$result = mysqli_query($conn, $sql);


?>

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">user Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>role</label>
                                                <select id="inputState"name="u_r_id" class="form-control">
                                                     <?php
                                                    while($rows = mysqli_fetch_assoc($result)){
                                                     ?>

                                                <option value="<?php echo $rows['id']?>" ><?php echo $rows['role_name']?></option> 
                                                    
                                                   <?php } ?> 

                                                    
                                                   
                                                </select>
                                            </div>
                                          
                                        </div>
                                        <div class="form-row">

                                            <div class="form-group col-md-12">
                                                <label>userName</label>
                                                <input type="name" name="name"  class="form-control" placeholder="enter your name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>password</label>
                                                <input type="password" name="password" class="form-control" placeholder="enter your password">
                                            </div>
                                            
                                        </div>
                                       
                                      
                                        <button type="submit" name="submit" class="btn btn-primary">add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                        </div>

                 




<?php
if(isset($_POST['submit'])){
$_roleId = $_POST['u_r_id'];
$_username = $_POST['name'];
$_password = $_POST['password'];

$sql = "insert into user (name, password, roleld_fk) values ('$_username','$_password','$_roleId')";

$result = mysqli_query($conn, $sql);


echo"<script> 
alert('user record has been inserted');
 </script>";
}
include("footer.php");


?>