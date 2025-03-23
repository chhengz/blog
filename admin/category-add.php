<?php
include("./authentication.php");
include("./includes/header.php");

?>


<div class="contaienr-fluid px-4">
    <h1 class="mt-4">PHP Admin Panel for Blogging</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Add</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Category
                        <a href="category-view.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="category-update.php" method="POST">

                        <div class="form-group mb-3">
                            <div class="row">

                                <!-- name -->
                                <div class="col-md-6 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                </div>

                                <!-- Slug -->
                                <div class="col-md-6 mb-3">
                                    <label for="slug">Slug (URL)</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Enter slug" required>
                                </div>

                                <!-- Description -->
                                <div class="col-md-12 mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" placeholder="Enter Description" rows="4" class="form-control"></textarea>
                                </div>

                                <!-- Meta Title -->
                                <div class="col-md-12 mb-3">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title" required>
                                </div>

                                <!-- Meta description -->
                                <div class="col-md-6 mb-3">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" placeholder="Enter Meta Description" rows="4" class="form-control" ></textarea>
                                </div>

                                <!-- Meta keyword -->
                                <div class="col-md-6 mb-3">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <textarea name="meta_keyword" id="meta_keyword" rows="4" placeholder="Enter Meta Keyword" class="form-control"  ></textarea>
                                </div>

                                <!-- navbar status -->
                                <div class="col-md-6 mb-3">
                                    <label for="navbar_status">Navbar Status</label> <br>
                                    <input type="checkbox" name="navbar_status" id="navbar_status" width="70px" height="70px">
                                </div>

                                <!-- status -->
                                <div class="col-md-6 mb-3">
                                    <label for="status">Status</label> <br>
                                    <input type="checkbox" name="status" id="status" width="70px" height="70px">
                                </div>

                                <!-- Add Category Button -->
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="add_category_btn" class="btn btn-primary">Add Category</button>
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