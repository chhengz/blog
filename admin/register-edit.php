<?php
include("./authentication.php");
include("./includes/header.php");

?>


<div class="contaienr-fluid px-4">
    <h1 class="mt-4">PHP Admin Panel for Blogging</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
        <?php
        if(isset($_GET['id']))
        {
            ?> <li class="breadcrumb-item"><?= $_GET['id'] ?></li> <?php
        }
        ?>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit User</h4>
                </div>
                <div class="card-body">
                    
                    <?php
                    if (isset($_GET['id'])) {
                        $user_id = $_GET['id'];
                        $users = "SELECT * FROM users WHERE id = '$user_id' ";
                        $users_run = mysqli_query($con, $users);
                        if (mysqli_num_rows($users_run) > 0) {
                            foreach ($users_run as $user) {
                    ?>
                                <form action="register-update-user.php" method="POST">
                                    <input type="hidden"  name="user_id" value="<?= $user['id'] ?>">
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="fname">First Name</label>
                                                <input type="text" name="fname" class="form-control" value="<?= $user['fname'] ?>" placeholder="Enter First Name" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lname">Last Name</label>
                                                <input type="text" name="lname" class="form-control" value="<?= $user['lname'] ?>" placeholder="Enter Last Name" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" placeholder="Enter Email" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control" value="<?= $user['password'] ?>" placeholder="Enter Password" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="role_as">Role As</label>
                                                <select name="role_as" required class="form-control">
                                                    <option value="">-- Select Role --</option>
                                                    <option value="1" <?= $user['role_as']=='1' ? 'selected' : '' ?> >Admin</option>
                                                    <option value="0" <?= $user['role_as']=='0' ? 'selected' : '' ?> >User</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="status">Status</label> <br>
                                                <input type="checkbox" name="status" id="status" width="70px" height="70px" <?= $user['status']=='1' ? 'checked' : '' ?>>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <button type="submit" name="update_user_btn" class="btn btn-primary">Update User</button>
                                            </div>
                                        </div>
                                </form>
                            <?php
                            }
                        } else {
                            ?>
                            <h4>Record Not Found!</h4>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include("includes/footer.php");
include("includes/script.php");

?>