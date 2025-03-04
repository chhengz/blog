<?php
include("./authentication.php");
include("./includes/header.php");
?>


<div class="contaienr-fluid px-4">
    <h1 class="mt-4">PHP Admin Panel for Blogging</h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <?php include("message.php"); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Registerd User
                        <a href="register-edit.php" class="btn btn-primary float-end">Add User</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM users";
                            $query_run = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $row) {
                            ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['fname'] ?></td>
                                        <td><?= $row['lname'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?php
                                            if ($row['role_as']) {
                                                echo "Admin";
                                            } elseif ($row['role_as'] == 0) {
                                                echo "User";
                                            }
                                            ?></td>
                                        <td><a href="register-edit.php?id=<?= $row['id'] ?>" class="btn btn-primary">Edit</a></td>
                                        <td><button type="submit" name="delete_register_btn" class="btn btn-danger">Delete</button></td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="6">Record Not Found!</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include("includes/footer.php");
include("includes/script.php");

?>