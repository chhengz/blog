<?php
include("./authentication.php");
include("./includes/header.php");

?>

<div class="contaienr-fluid px-4">
    <h1 class="mt-4">PHP Admin Panel for Blogging</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item">Posts</li>
        <li class="breadcrumb-item active">Edit</li>
        <!-- <li class="breadcrumb-item">Add</li> -->
    </ol>
    <div class="row">
        <div class="col-md-12">

            <?php include("message.php"); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Add Post
                        <a href="post-view.php" class="btn btn-danger float-end">Cancel Edit</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $post_id = $_GET['id'];
                        $post_query = "SELECT * FROM posts WHERE id='$post_id' LIMIT 1";
                        $post_query_res = mysqli_query($con, $post_query);

                        if (mysqli_num_rows($post_query_res) > 0) {
                            $post_row = mysqli_fetch_array($post_query_res);
                            ?>

                            <form action="post-update.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="post_id" value="<?= $post_row['id'] ?>">
                                <div class="form-group mb-0">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="">Category List</label>
                                            <?php
                                            $category = "SELECT * FROM categories WHERE status='0' ";
                                            $category_run = mysqli_query($con, $category);

                                            if (mysqli_num_rows($category_run) > 0) {
                                                ?>
                                                <select name="category_id" required class="form-control">
                                                    <option value="">-- Select Category --</option>
                                                    <?php
                                                    foreach ($category_run as $categoryitem) {
                                                        ?>
                                                        <option value="<?= $categoryitem['id'] ?>"
                                                            <?= $categoryitem['id'] == $post_row['category_id'] ? 'Selected' : '' ?>>
                                                            <?= $categoryitem['name'] ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                <?php
                                            } else {
                                                ?>
                                                <h5>No Category Available</h5>
                                                <?php
                                            }
                                            ?>
                                        </div>

                                        <!-- name -->
                                        <div class="col-md-6 mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" value="<?= $post_row['name'] ?>" required
                                                class="form-control">
                                        </div>

                                        <!-- Slug -->
                                        <div class="col-md-6 mb-3">
                                            <label for="slug">Slug (URL)</label>
                                            <input type="text" name="slug" value="<?= $post_row['slug'] ?>" required
                                                class="form-control">
                                        </div>

                                        <!-- Description -->
                                        <div class="col-md-12 mb-3">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="summernote" required class="form-control"
                                                rows="4"><?= $post_row['description'] ?></textarea>
                                        </div>

                                        <!-- Meta Title -->
                                        <div class="col-md-12 mb-3">
                                            <label for="meta_title">Meta Title</label>
                                            <input type="text" name="meta_title" value="<?= $post_row['meta_title'] ?>"
                                                max="101" required class="form-control">
                                        </div>

                                        <!-- Meta description -->
                                        <div class="col-md-6 mb-3">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea name="meta_description" required class="form-control"
                                                rows="4"><?= $post_row['meta_description'] ?></textarea>
                                        </div>

                                        <!-- Meta keyword -->
                                        <div class="col-md-6 mb-3">
                                            <label for="meta_keyword">Meta Keyword</label>
                                            <textarea name="meta_keyword" required class="form-control"
                                                rows="4"><?= $post_row['meta_keyword'] ?></textarea>
                                        </div>

                                        <!-- Image -->
                                        <div class="col-md-6 mb-3">
                                            <label for="image">Image</label>
                                            <input type="hidden" name="old_image" value="<?= $post_row['image'] ?>">
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <!-- status -->
                                        <div class="col-md-6 mb-3">
                                            <label for="status">Status</label> <br>
                                            <input type="checkbox" name="status" id="status" width="80px" height="80px">
                                            Checked = Hidden, UnChecked = Visable
                                        </div>

                                        <!-- Add Category Button -->
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" name="post_update" class="btn btn-primary">Update
                                                Post</button>
                                        </div>
                                    </div>
                            </form>
                            <?php
                        } else {
                            ?>
                            <h4>No Record Found</h4>
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