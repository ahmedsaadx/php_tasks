<?php require_once('inc/header.php'); ?>
<?php session_start();?>

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Shop in style</h1>
            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <span > <?php echo $_SESSION['success'] ?? '';?> </span>
                <form action="actions/product_form.php" enctype="multipart/form-data" method="POST" class="form border my-2 p-3">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="productName" id="productName" class="form-control">
                            <span class="text-danger"> <?php echo $_SESSION['errors']['productname_required'] ?? $_SESSION['errors']['productname_length'] ?? '';?></span>
                        </div>
                        <div class="mb-3">
                            <label for="">Price</label>
                            <input type="number" name="price" id="" class="form-control">
                            <span class="text-danger"> <?php echo $_SESSION['errors']['price_required'] ?? $_SESSION['errors']['price_numeric'] ?? '';?></span>

                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="7"></textarea>
                            <span class="text-danger"> <?php echo $_SESSION['errors']['description'] ?? $_SESSION['errors']['description_length'] ?? '';?></span>
                        </div>
                        <div class="mb-3">
                            <label for="isAvailable">Sale</label>
        
                            <select name="sale" id="sale" class="form-control">
                                <option value="true">True</option>
                                <option value="false">False</option>
                            </select>
                            <span class="text-danger"> <?php echo $_SESSION['errors']['sale_required'] ?? $_SESSION['errors']['sale_value'] ?? '';?></span>
                        </div>
                        <div class="mb-3">
                            <label for="productImage">Upload Product Image</label>
                            <input type="file" name="productImage" id="productImage" class="form-control">
                            <span class="text-danger"> <?php echo $_SESSION['errors']['photo_required'] ?? $_SESSION['errors']['photo_size'] ?? '';?></span>
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Send" id="" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
if (isset($_SESSION['errors']))
 unset($_SESSION['errors']);
 
 ?>
<?php if (isset($_SESSION['success']))
 unset($_SESSION['success']);
 
 ?>
<?php require_once('inc/footer.php'); ?>

