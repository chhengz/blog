<?php
include('includes/config.php');

$page_title = "Blog";
$meta_description = "Home page description blogging website";
$meta_keywords = "php, html";

include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="py-5">
    <div class="container border border-gray rounded-3  ">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-dark">Category</h3>
                <div class="underline"></div>
            </div>

            <?php
            $homeCategory = "SELECT * FROM categories WHERE navbar_status='0' AND status='0' LIMIT 12 ";
            $homeCategory_run = mysqli_query($con, $homeCategory);

            if (mysqli_num_rows($homeCategory_run) > 0) {
                foreach ($homeCategory_run as $homeCateItem) {
                    ?>
                    <div class="col-md-3 mb-4 ">
                        <a class="text-decoration-none text-dark" href="category.php?title=<?= $homeCateItem['slug']; ?>">
                            <div class="card card-body bg-light">
                                <?= $homeCateItem['name']; ?>
                            </div>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>



<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-dark">VSC Blogger</h3>
                 <div style="width: 50px; height: 3px; background-color: gray; margin-bottom: 8px; border-radius: 4px;"></div>
                <p>
                    VSC's blog provide the world with the best experience.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-dark">Latest Posts</h3>
                <div style="width: 50px; height: 4px; background-color: gray; margin-bottom: 8px; border-radius: 4px;"></div>

                <?php
                $homePosts = "SELECT * FROM posts WHERE status='0' ORDER BY id DESC LIMIT 12 ";
                $homePosts_run = mysqli_query($con, $homePosts);

                if (mysqli_num_rows($homePosts_run) > 0) {
                    foreach ($homePosts_run as $homePostItem) {
                        ?>
                        <div class="mb-4">
                            <!-- ändra färg på categories här -->
                            <a class="text-decoration-none text-dark" href="post.php?title=<?= $homePostItem['slug']; ?>">
                                <!-- ändra färg på categories här -->
                                <div class="card card-body bg-light shadow-sm mb-4">
                                    <h5><?= $homePostItem['name']; ?></h5>
                                    <div>
                                        <label class="text-dark me-2">Posted On:
                                            <?= date('d-M-Y', strtotime($homePostItem['created_at'])); ?></label>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Reach Us</h4>
                    </div>
                    <div class="card-body">
                        sokchheng802@gmail.com
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>About Me</h4>
                    </div>
                    <div class="card-body">
                        <a href="about.php" class="btn btn-primary">About Me</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>