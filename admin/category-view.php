<?php
include("./authentication.php");
include("./includes/header.php");
?>

<div class="contaienr-fluid px-4">
    <h1 class="mt-4">PHP Admin Panel for Blogging</h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Category</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <?php include("message.php"); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Categories
                        <a href="category-add.php" class="btn btn-primary float-end">Add Category</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $category = "SELECT * FROM categories WHERE status != '2' ";
                            $category_run = mysqli_query($con, $category);
                            if (mysqli_num_rows($category_run) > 0) {
                                foreach ($category_run as $item) {
                            ?>
                                    <tr>
                                        <td><?= $item['id'] ?></td>
                                        <td><?= $item['name'] ?></td>
                                        <td><?= $item['status']== '1' ? 'Hidden' : 'Visible' ?></td>
                                        <td><a href="category-edit.php?id=<?= $item['id'] ?>" class="btn btn-primary">Edit</a></td>
                                        <td>
                                            <form action="category-update.php" method="post">
                                                <button type="submit" name="delete_category_btn"
                                                    value="<?= $item['id'] ?>"
                                                    onclick="return confirm('Are you sure you want to delete this record? 🗑️')"
                                                    class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
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