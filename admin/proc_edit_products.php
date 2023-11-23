<?php

    include ('connection/connect.php');

    
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $deadline = $_POST['deadline']; // 2012-09-24 15:30

    $id = $_POST['id'];


    if($product_name == '' || $description == '')
    {
        $error = 'All information are required !!!';
        include ('edit_products.php');
        exit;
    }

    // image
    if($_FILES['image']['name'])
    {
    $file = $product_name.'_'.$_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder="upload/";
    //file size
    $new_size = $file_size/1024;  

    $new_file_name = strtolower($file);

    $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if ($new_size > 1550) {
        $error = "Sorry, your image file is too large, the required file size is 1.5mb below";
        include ('edit_products.php');
        exit;
    }
    
    if($file_ext == 'jpg' || $file_ext == 'png' || $file_ext == 'JPG' || $file_ext == 'PNG' || $file_ext == 'jpeg'  || $file_ext == 'JPEG' || $file_ext == 'GIF' || $file_ext == 'gif')
    {
        $image = str_replace(' ',' ',$new_file_name);
        move_uploaded_file($file_loc, $folder. $image);
    }
    else 
    {
        $error = "Please reupload your image, the ony accepted file format is JPG, jpg, JPEG, jpeg, PNG, png, GIF, gif";
        include ('edit_products.php');
        exit;
    }

    $sql = "update products set image = '$image' where id = '$id'";
    $result = mysqli_query($db, $sql);

    }
    
    // image ends here 


    $query = "update products set product_name = '$product_name', description = '$description', deadline = '$deadline' where id ='$id'";
    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Product has been edited successfully';
        include ('edit_products.php');
        exit;
        
    }
    else{
        $error = "Sorry, product cannot be editied at this time, make sure all information are entered correctly";
        include ('edit_products.php');
        exit;
    }

    
?>