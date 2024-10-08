<?php
session_start();
$errors=[];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $productname = sanitize_($_POST['productName']);
    $price = sanitize_($_POST['price']);
    $description = sanitize_($_POST['description']);
    $sale = sanitize_($_POST['sale']);
    if (empty($productname)) {
        $_SESSION['errors']['productname_required'] = 'Product name is required.';
    } else if (strlen($productname) > 30) {
        $_SESSION['errors']['productname_length'] = 'Product name must be under 30 characters.';
    }
    if (empty($price)) {
        $_SESSION['errors']['price_required'] = 'Price is required.';
    } else if (!is_numeric($price)) {
        $_SESSION['errors']['price_numeric'] = 'Price must be a number.';
    }
    if (empty($description)) {
        $_SESSION['errors']['description'] = 'description is required.';
    } else if (strlen($description) > 50) {
        $_SESSION['errors']['description_length'] = 'Product name must be under 50 characters.';
    }
    if(empty($sale)){
        $_SESSION['errors']['sale_required'] = 'sale is required.';
    } else if ($sale !== 'true' && $sale !== 'false'){
        $_SESSION['errors']['sale_value']= 'sale must be true or false only';
    }
    if (empty($_FILES['productImage']['name'])){
        $_SESSION['errors']['photo_required'] = 'photo is required.';
    } else {
        $allowedTypes = ['image/jpeg', 'image/png'];
        $fileType = $_FILES['productImage']['type'];
        $fileSize = $_FILES['productImage']['size'];

        if (!in_array($fileType, $allowedTypes)) {
            $_SESSION['errors']['photo_type'] = 'Only JPG and PNG files are allowed.';
        }
        if ($fileSize > 5 * 1024 * 1024) {
            $_SESSION['errors']['photo_size'] = 'Photo size must not exceed 5 MB.';
        }
        
        // If no file errors, handle file upload
        if (empty($_SESSION['errors'])) {
            $uploadDir = '../media/';
            $uploadFile = $uploadDir . basename($_FILES['productImage']['name']);
            if (!move_uploaded_file($_FILES['productImage']['tmp_name'], $uploadFile)) {
                $_SESSION['errors']['photo_upload'] = 'Failed to upload photo.';
            }
        }
    }
}

if (empty($_SESSION['errors'])) {
    $_SESSION['success'] = 'Data updated successfully';

    $file_content = file_get_contents('../database/product.json');
    $products = json_decode($file_content, true); 

    if (!$products) {
        $products = [];
    }

    $newProductId = 1;
    if (!empty($products)) {
        $lastProduct = end($products); 
        $newProductId = $lastProduct['productId'] + 1; 
    }

    $data_array = [
        "productId" => $newProductId,
        "productName" => $productname,
        "price" => $price,
        "description" => $description,
        "sale" => $sale,
        "productImage" => $uploadFile 
    ];

    $products[] = $data_array;

    
    file_put_contents('../database/product.json', json_encode($products, JSON_PRETTY_PRINT));

    header('location: ../createproduct.php');
    die();
} else {
    header('location: ../createproduct.php');
    die();
}
function sanitize_($input){
    $input = trim(htmlspecialchars($input));
    return($input);
}