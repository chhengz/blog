
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <title>Document</title> -->
    <title><?php if(isset($page_title)) { echo"$page_title"; } else { echo "Berger's Web Blog"; } ?></title>
    <meta name="description" content="<?php if(isset($meta_description)) { echo"$meta_description"; } ?>">
    <meta name="keywords" content="<?php if(isset($meta_keywords)) { echo"$meta_keywords"; } ?>">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
