

<div>
    <div class="container">
        <div class="row">
            <div class="col-4 col-md-3 col-sm-4">
                <img src="assets/images/logo.png" alt="sokchheng - blogging" class="w-100 col-md-4">
            </div>
        </div>
        <div class="col-md-9 col-sm-8">
            
        </div>
    </div>
</div>

<nav class="navbar p-0 bg-dark navbar-expand-lg bg-body-tertiary sticky-top" data-bs-theme="dark">
    <div class="container p-2">
        <a class="navbar-brand d-block d-sm-none d-md-none" href="index.php">VSC Blogger</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>

                <?php
                $navbarCategory = "SELECT * FROM categories WHERE navbar_status='0' AND status='0' LIMIT 10";
                $navbarCategory_run = mysqli_query($con, $navbarCategory);

                if (mysqli_num_rows($navbarCategory_run) > 0) {
                    foreach ($navbarCategory_run as $navItems) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="category.php?title=<?= $navItems['slug']; ?>"><?= $navItems['name']; ?></a>
                        </li>
                        <?php
                    }
                }
                ?>

                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li> -->

                <?php if (isset($_SESSION['auth_user'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?= $_SESSION['auth_user']['user_name']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="logout.php" method="post">
                                    <button type="submit" name="logout" class="dropdown-item">Logout</button>
                                </form>

                            </li>
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li> -->
                            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                <?php endif; ?>

            </ul>

            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>