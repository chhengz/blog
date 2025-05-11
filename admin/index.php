<?php 
include('authentication.php');
include('includes/header.php'); ?>


<div class="container-fluid px-4">

    <h1 class="mt-4">PHP | Admin Panel for blogging</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Catagories
                    <?php
                        $category_query = "SELECT * FROM categories";
                        $category_result = mysqli_query($con, $category_query);
                        if($category_total = mysqli_num_rows($category_result)) {
                            echo '<h4 class="mb-0">' . $category_total . '</h4>';
                        } else {
                            echo '<h4 class="mb-0">No Data</h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Total Post
                    <?php
                        $post_query = "SELECT * FROM posts";
                        $post_result = mysqli_query($con, $post_query);
                        if($post_total = mysqli_num_rows($post_result)) {
                            echo '<h4 class="mb-0">' . $post_total . '</h4>';
                        } else {
                            echo '<h4 class="mb-0">No Data</h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Users
                    <?php
                        $user_query = "SELECT * FROM users";
                        $user_result = mysqli_query($con, $user_query);
                        if($user_total = mysqli_num_rows($user_result)) {
                            echo '<h4 class="mb-0">' . $user_total . '</h4>';
                        } else {
                            echo '<h4 class="mb-0">No Data</h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Total Blocked Users
                    <?php
                        $user_blocked_query = "SELECT * FROM users WHERE status ='1'";
                        $user_blocked_result = mysqli_query($con, $user_blocked_query);
                        if($user_blocke_total = mysqli_num_rows($user_blocked_result)) {
                            echo '<h4 class="mb-0">' . $user_blocke_total . '</h4>';
                        } else {
                            echo '<h4 class="mb-0">No Data</h4>';
                        }
                    ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
include 'includes/footer.php';
include 'includes/script.php'; ?>