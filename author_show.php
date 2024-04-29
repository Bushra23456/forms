<?php
include("header.php");
include("connection.php");
?>

 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>authors show</h4>
                           
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Author Name</th>
                                                <th>DOB</th>
                                                <th>Location</th>
                                                <th>Image</th>
                                                <th>Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                              <?php
                                              $sql = "select * from authors";
                                              $result = mysqli_query($conn, $sql);
                                              while($rows = mysqli_fetch_assoc($result)){
                                              ?>
                                              <td><?php echo $rows['id'];?></td>
                                              <td><?php echo $rows['author_name'];?></td>
                                              <td><?php echo $rows['dob'];?></td>
                                              <td><?php echo $rows['location'];?></td>
                                              <td><?php echo $rows['image'];?></td>
                                              
                                              <?php
                                                echo "<td><img src=\"images/authors/{$rows['image']}\" height=100px width=100px></td>"
                                                ?>
                                                <td><a href="author_update.php?id=<?php echo $rows['id'];?>" class="text-primary">Edit<i class="bi bi-pencil-square"></i></a></td>
                                                <td><a href="author_delete.php?id=<?php echo $rows['id'];?>" class="text-danger">Delete<i class="bi bi-trash3"></i></a></td>
                                              
                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>


<?php
include("footer.php");
?>