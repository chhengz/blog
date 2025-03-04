<?php
    session_start();

    if(isset($_SESSION['auth']))
    {
        if(!isset($_SESSION['message']))
        {
            $_SESSION['message'] = "You are already logged In!";
        }
        header("location: index.php");
        exit(0);
    }

    include 'includes/header.php';
    include './includes/navbar.php';
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-5">

            <?php include("message.php") ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">

                        <form action="logincode.php" method="post">

                            <div class="form-group mb-3">
                                <label for="">Email Id</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>