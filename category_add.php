<?php

include("connection.php");
include("header.php");
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
                <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>category Name</label>
                                                <input type="text" name="categoryname" class="form-control" placeholder="enter your name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>categoryImage</label>
                                                <input type="file" name="image" class="form-control" >
                                            </div>
                                            
                                        </div>
                                        
                                            
                                       
                                       
                                        <button type="submit" name="submit" class="btn btn-primary">ADD category</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>



<?php
if(isset($_POST['submit'])){

    $categoryName = $_POST['categoryname'];
    $categoryImage = $_FILES['image']['name'];

    $sql = "insert into category (categoryName, categoryImage) values('$categoryName', '$categoryImage')";
    $result = mysqli_query($conn, $sql);
    if(isset($_FILES)){
        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($file_tmp , "images/category/" .$file_name);

    }
   echo "<script>
   alert('category has added');
    </script>";
}

include("footer.php");

?>