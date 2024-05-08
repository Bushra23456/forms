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
                                                <label>category</label>
                                                <select id="inputState" name="c_id" class="form-control">
                                                    <?php
                                                    $sql = "select * from category";
                                                    $result = mysqli_query($conn, $sql);
                                                    while($rows = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    <option value="<?php echo $rows['id'] ?>"><?php echo $rows['categoryName'] ?></option>
                                                   <?php } ?>
                                                </select>
                                            </div>
                                           
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>authors</label>
                                                <select id="inputState" name="a_id" class="form-control">
                                                    <?php
                                                    $sql = "select * from authors";
                                                    $result = mysqli_query($conn, $sql);
                                                    while($rows = mysqli_fetch_assoc($result)){
                                                    ?>
                                                    
                                                    <option value="<?php echo $rows['id'] ?>"><?php echo $rows['author_name'] ?></option>
                                                   <?php } ?>
                                                   
                                                </select>
                                            </div>
                                           
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Book Name</label>
                                            <?php
                                            $ID = $_GET["id"];
                                            $sql = "select * from books where id = $ID";
                                            $result = mysqli_query($conn, $sql);
                                            $rows = mysqli_fetch_assoc($result);
                                            ?>
                                                <input type="text" value="<?php echo $rows['bookname'] ?>" name="bookname" class="form-control" placeholder="Enter your name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Description</label>
                                                <input type="text" value="<?php echo $rows['description'] ?>" name="description" class="form-control" placeholder="Enter your description">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Price</label>
                                                <input type="number" value="<?php echo $rows['price'] ?>" name="price" class="form-control" placeholder="Enter your Price">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Book image</label>
                                                <span><?php  echo $rows['bookimage'] ?></span>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                        
                                       
                                        <button type="submit" name="update" class="btn btn-primary">update book</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
<?php
if(isset($_POST['update'])){
    $BookName = $_POST['bookname'];
    $Description = $_POST['description'];
    $Price = $_POST['price'];
    $BookImage = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp , "images/book" .$file_name);
    $catId = $_POST['c_id'];
    $authId = $_POST['a_id'];
    $sql = "update books set bookname = '$BookName' , description = '$Description' , price = '$Price' , catld_fK = '$catId' , authld_fK = '$authId' , bookimage = '$BookImage'  where id = $ID ";
    $result = mysqli_query($conn, $sql);
    echo "<script>
    alert('Book Has Been updated!');
    window.location.href='book_show.php';
    </script>";
}
    include("footer.php");
?>