<?php
include("./authentication.php");
include("./includes/header.php");

?>


<div class="contaienr-fluid px-4">
    <h1 class="mt-4">PHP Admin Panel for Blogging</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item">Posts</li>
        <li class="breadcrumb-item active">Add</li>
        <!-- <li class="breadcrumb-item">Add</li> -->
    </ol>
    <div class="row">
        <div class="col-md-12">

            <?php include("message.php"); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Add Post
                        <a href="post-view.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="post-update.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Category List</label>
                                    <?php
                                    $category = "SELECT * FROM categories WHERE status = '0' ";
                                    $category_run = mysqli_query($con, $category);
                                    if (mysqli_num_rows($category_run) > 0) {
                                        ?>
                                        <select name="category_id" id="" class="form-control" required>
                                            <option value="">-- Select Category --</option>
                                            <?php
                                            foreach ($category_run as $item) {
                                                ?>
                                                <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
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
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name"
                                        required>
                                </div>

                                <!-- Slug -->
                                <div class="col-md-6 mb-3">
                                    <label for="slug">Slug (URL)</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Enter slug"
                                        required>
                                </div>

                                <!-- Description -->
                                <div class="col-md-12 mb-3">
                                    <label for="summernote">Description</label>
                                    <textarea name="description" id="summernote" placeholder="Enter Description"
                                        rows="4" class="form-control"></textarea>
                                </div>

                                <!-- Meta Title -->
                                <div class="col-md-12 mb-3">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control"
                                        placeholder="Enter Meta Title" required>
                                </div>

                                <!-- Meta description -->
                                <div class="col-md-6 mb-3">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description"
                                        placeholder="Enter Meta Description" rows="4" class="form-control"></textarea>
                                </div>

                                <!-- Meta keyword -->
                                <div class="col-md-6 mb-3">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <textarea name="meta_keyword" id="meta_keyword" rows="4"
                                        placeholder="Enter Meta Keyword" class="form-control"></textarea>
                                </div>

                                <!-- Image -->
                                <div class="col-md-6 mb-3">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <!-- status -->
                                <div class="col-md-6 mb-3">
                                    <label for="status">Status</label> <br>
                                    <input type="checkbox" name="status" id="status" width="70px" height="70px">
                                </div>

                                <!-- Add Category Button -->
                                <div class="col-md-12 mt-3">
                                    <button type="submit" name="add_post_btn" class="btn btn-primary">Save Post</button>
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