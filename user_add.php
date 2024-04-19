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
                <!-- row -->
                <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>State</label>
                                                <select id="inputState" class="form-control">
                                                    <option >Choose...</option>
                                                   
                                                </select>
                                            </div>
                                          
                                        </div>
                                        <div class="form-row">

                                            <div class="form-group col-md-12">
                                                <label>userName</label>
                                                <input type="text" name="username"  class="form-control" placeholder="enter your name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>password</label>
                                                <input type="email" name="password" class="form-control" placeholder="enter your email">
                                            </div>
                                            
                                        </div>
                                       
                                      
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                        </div>

                 




<?php

include("footer.php");


?>