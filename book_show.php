<?php
include("header.php");
include("connection.php");
$sql ="select books .* , authors.author_name , category.categoryName from books inner join authors on books.authld_fk=authors.id inner join category on books.catld_fk=category.id";
$result = mysqli_query($conn , $sql);

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
                            <p class="mb-0">Your business dashboard template</p>
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
                                                <th>ID</th>
                                                <th>BookName</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>catld_fk</th>
                                                <th>authld_fk</th>	
                                                <th>bookimage</th>	
                                                <th>Edit</th>	
                                                <th>Delete</th>	

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                            while($rows = mysqli_fetch_assoc($result)){
                                            ?>
                                            <td><?php echo $rows['id'] ?></td>
                                            <td><?php echo $rows['bookname'] ?></td>
                                            <td><?php echo $rows['description'] ?></td>
                                            <td><?php echo $rows['price'] ?></td>
                                            <td><?php echo $rows['categoryName'] ?></td>
                                            <td><?php echo $rows['author_name'] ?></td>

                                                
                                               
                                                <?php
                                                echo "<td><img src=\"images/book/{$rows['bookimage']}\" height=100px width=100px></td>"
                                                ?>
                                                <td><a href="book_update.php?id=<?php echo $rows['id'];?>" class="text-primary">Edit</a></td>
                                                <td><a href="book_delete.php?id=<?php echo $rows['id'];?>" class="text-danger">Delete</a></td>
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