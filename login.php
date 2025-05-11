<?php
include 'includes/config.php';

$page_title = "Login";
$meta_description = "Login page description blogging website";
$meta_keywords = "php, html, css, laravel, reactjs";


include 'includes/header.php';

if (isset($_SESSION['auth'])) {
    if (!isset($_SESSION['message'])) {
        $_SESSION['message'] = "You are already logged In!";
    }
    header("location: index.php");
    exit(0);
}

include './includes/navbar.php';
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-5">
                <?php include("message.php") ?>
                <div class="card shadow-lg border-0 rounded-lg mt-3">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="inputEmail" type="email"
                                    placeholder="name@example.com" required />
                                <label for="inputEmail">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="password" id="inputPassword" type="password"
                                    placeholder="Password" required />
                                <label for="inputPassword">Password</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="#!">Forgot Password?</a>
                                <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>