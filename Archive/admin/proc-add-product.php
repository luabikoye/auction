<?php
    include ('connection/connect.php');


    
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $deadline = $_POST['deadline']; // 2012-09-24 15:30
   

    if($product_name == '' || $description == '' ||  $deadline == '')
    {
        $error = 'All information are required !!!';
        include ('add_product.php');
        exit;
    }


        // image
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
            $error = "Sorry, your Dob file is too large, the required file size is 1.5mb below";
            include ('ajo_loan.php');
            exit;
        }
        
        if($file_ext == 'jpg' || $file_ext == 'png' || $file_ext == 'JPG' || $file_ext == 'PNG' || $file_ext == 'jpeg'  || $file_ext == 'JPEG' || $file_ext == 'doc' || $file_ext == 'docx' || $file_ext == 'pdf' || $file == 'PDF')
        {
            $image = str_replace(' ',' ',$new_file_name);
            move_uploaded_file($file_loc, $folder. $image);
        }
        else 
        {
            $error = "Please reupload your image, the ony accepted file format is JPG, jpg, JPEG, jpeg, PNG, png, Doc, doc, Docx, docx, PDF, pdf";
            include ('add_product.php');
            exit;
        }
    // image ends here 


    $query = "insert into products(product_name, description, image, deadline) 
    values('$product_name', '$description', '$image', '$deadline')";
    

    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Product has been added successfully';
        include ('add_product.php');
        exit;
        
    }
    else{
        $error = 'Sorry, product cannot be added at this time, make sure all information are entered correctly';
        include ('add_product.php');
        exit;
    }
    

?>