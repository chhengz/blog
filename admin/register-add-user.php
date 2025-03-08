<?php
include("./authentication.php");
include("./includes/header.php");
?>


<div class="contaienr-fluid px-4">
    <h1 class="mt-4">PHP Admin Panel for Blogging</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Users</li>
        <!-- <li class="breadcrumb-item">Add</li> -->
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h4>Add User
                        <a href="register-view.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">

                    <form action="register-update-user.php" method="POST">
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="role_as">Role As</label>
                                    <select name="role_as" required class="form-control">
                                        <option value="">-- Select Role --</option>
                                        <option value="1">Admin</option>
                                        <option value="0">User</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="status">Status</label> <br>
                                    <input type="checkbox" name="status" id="status" width="70px" height="70px">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="add_user_btn" class="btn btn-primary">Add User</button>
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<?php
include("includes/footer.php");
include("includes/script.php");
?>