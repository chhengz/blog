<?php
session_start();
include 'includes/header.php';
include './includes/navbar.php';
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-5">

            <?php include("message.php") ?>


                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">

                        <form action="registercode.php" method="post">
                            <div class="form-group mb-3">
                                <label for="">First Name</label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email Id</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password" required>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>