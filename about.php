<?php
include 'includes/config.php';

$page_title = "About Us";
$meta_description = "About page description blogging website";
$meta_keywords = "php, html, css, laravel, reactjs";


include 'includes/header.php';

include './includes/navbar.php';
?>

<div class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 text-primary fw-bold">About The Project</h1>
            <p class="lead text-secondary">
                This PHP blog system provides a complete solution for managing blog content with user authentication.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Lecturer Card -->
            <div class="col-md-5">
                <div class="border rounded p-4 shadow-sm bg-light">
                    <h2 class="h4 text-dark mb-3">Lecturer</h2>
                    <p><strong>Name:</strong> MENG HANN</p>
                    <p><strong>Subject:</strong> BACKEND WEB</p>
                    <p><strong>Class:</strong> A6-202</p>
                </div>
            </div>

            <!-- Student Card -->
            <div class="col-md-5">
                <div class="border rounded p-4 shadow-sm bg-light">
                    <h2 class="h4 text-dark mb-3">Student</h2>
                    <p><strong>Name:</strong> VANG SOKCHHENG</p>
                    <p><strong>Email:</strong> sokchheng802@gmail.com</p>
                </div>
            </div>

            <!-- Project Card -->
            <div class="col-md-10">
                <div class="border rounded p-4 shadow-sm bg-light">
                    <h2 class="h4 text-dark mb-3">Project</h2>
                    <p><strong>Topic:</strong> PHP Blog Post</p>
                    <p><strong>Technologies:</strong> 
                        <span class="badge bg-primary me-2">PHP</span>
                        <span class="badge bg-primary me-2">MySQL</span>
                        <span class="badge bg-primary">Bootstrap</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>