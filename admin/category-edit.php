<?php
include("./authentication.php");
include("./includes/header.php");

?>


<div class="contaienr-fluid px-4">
    <h1 class="mt-4">PHP Admin Panel for Blogging</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">Category</li>
        <?php
        if (isset($_GET['id'])) {
            ?>
            <li class="breadcrumb-item"><?= $_GET['id'] ?></li> <?php
        }
        ?>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Category
                        <a href="category-view.php" class="btn btn-danger float-end">Cancel Edit</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $category_id = $_GET['id'];
                        $category = "SELECT * FROM categories WHERE id = '$category_id' ";
                        $category_run = mysqli_query($con, $category);
                        if (mysqli_num_rows($category_run) > 0) {
                            foreach ($category_run as $item) {
                                ?>
                                <form action="category-update.php" method="POST">
                                    <input type="hidden" name="category_id" value="<?= $item['id'] ?>">
                                    <div class="form-group mb-3">
                                        <div class="row">

                                            <!-- name -->
                                            <div class="col-md-6 mb-3">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" placeholder="Enter Name" required
                                                    class="form-control" value="<?= $item['name'] ?>">
                                            </div>

                                            <!-- Slug -->
                                            <div class="col-md-6 mb-3">
                                                <label for="slug">Slug (URL)</label>
                                                <input type="text" name="slug" placeholder="Enter slug" required
                                                    class="form-control" value="<?= $item['slug'] ?>">
                                            </div>

                                            <!-- Description -->
                                            <div class="col-md-12 mb-3">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" placeholder="Enter Description"
                                                    rows="4" class="form-control"><?= $item['description'] ?></textarea>
                                            </div>

                                            <!-- Meta Title -->
                                            <div class="col-md-12 mb-3">
                                                <label for="meta_title">Meta Title</label>
                                                <input type="text" name="meta_title" placeholder="Enter Meta Title" required
                                                    value="<?= $item['meta_title'] ?>" class="form-control">
                                            </div>

                                            <!-- Meta description -->
                                            <div class="col-md-6 mb-3">
                                                <label for="meta_description">Meta Description</label>
                                                <textarea name="meta_description" id="meta_description"
                                                    placeholder="Enter Meta Description" rows="4"
                                                    class="form-control"><?= $item['meta_description'] ?></textarea>
                                            </div>

                                            <!-- Meta keyword -->
                                            <div class="col-md-6 mb-3">
                                                <label for="meta_keyword">Meta Keyword</label>
                                                <textarea name="meta_keyword" id="meta_keyword" rows="4"
                                                    placeholder="Enter Meta Keyword"
                                                    class="form-control"><?= $item['meta_keyword'] ?></textarea>
                                            </div>

                                            <!-- navbar status -->
                                            <div class="col-md-6 mb-3">
                                                <label for="navbar_status">Navbar Status</label> <br>
                                                <input type="checkbox" name="navbar_status" id="navbar_status" width="70px"
                                                    height="70px" <?= $item['navbar_status'] == '1' ? 'checked' : '' ?>>
                                            </div>

                                            <!-- status -->
                                            <div class="col-md-6 mb-3">
                                                <label for="status">Status</label> <br>
                                                <input type="checkbox" name="status" id="status" width="70px" height="70px"
                                                    <?= $item['status'] == '1' ? 'checked' : '' ?>>
                                            </div>

                                            <!-- Add Category Button -->
                                            <div class="col-md-12 mb-3">
                                                <button type="submit" name="update_category_btn" class="btn btn-primary">Update
                                                    Category</button>
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