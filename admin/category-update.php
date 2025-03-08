<?php
include("./authentication.php");

// add category
if(isset($_POST['add_category_btn']))
{
    // $id = $_POST['id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $navbar_status = $_POST['navbar_status']== true ? '1' : '0';
    $status = $_POST['status'] == true ? '1' : '0';

    $insert_query = "INSERT INTO categories (name, slug, description, meta_title, meta_description, meta_keyword, navbar_status, status) 
                    VALUES ('$name', '$slug', '$description', '$meta_title', '$meta_description', '$meta_keyword', '$navbar_status', '$status') ";
    $insert_query_run = mysqli_query($con, $insert_query);

    if($insert_query_run)
    {
        $_SESSION['category'] = "✅ Category Added Successfully";
        header("Location: category-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['category'] = "❌ Category Add Failed!";
        header("Location: category-view.php");
        exit(0);
    }
}


// update category
if(isset($_POST['update_category_btn']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $navbar_status = $_POST['navbar_status']== true ? '1' : '0';
    $status = $_POST['status'] == true ? '1' : '0';

    $update_query = "UPDATE categories SET name='$name', slug='$slug', description='$description', meta_title='$meta_title', meta_description='$meta_description', meta_keyword='$meta_keyword', navbar_status='$navbar_status',status='$status' WHERE id='$category_id' ";
    $update_query_run = mysqli_query($con, $update_query);

    if($update_query_run)
    {
        $_SESSION['category'] = "✅ Category Updated Successfully!";
        header("Location: category-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['category'] = "❌ Category Update Failed!";
        header("Location: category-view.php");
        exit(0);
    }
}


// delete category
if(isset($_POST['delete_category_btn']))
{
    $category_id = $_POST['delete_category_btn'];
    // $delete_query = "DELETE FROM categories WHERE id = '$category_id' ";
    $delete_query = "UPDATE categories SET status = '2' WHERE id = '$category_id' LIMIT 1";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        $_SESSION['category'] = "✅ Category Deleted Successfully! 🗑️";
        header("Location: category-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['category'] = "❌ Category Delete Failed!";
        header("Location: category-view.php");
        exit(0);
    }
}

?>