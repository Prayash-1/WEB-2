<?php
$error = [];
$category = ""; $name = ""; $price = ""; $status = ""; $description = ""; $img = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

     if(isset($_POST['category']) && !empty(trim($_POST['category']))){
        $category = $_POST['category'];
    }else{
        $error['category'] = "Select category";
    }


    if(isset($_POST['name']) && !empty(trim($_POST['name']))){
        $name = $_POST['name'];
    }else{
        $error['name'] = "Enter product name";
    }


    if(isset($_POST['price']) && !empty(trim($_POST['price']))){
        $price = $_POST['price'];
    }else{
        $error['price'] = "Enter price";
    }

    if(isset($_POST['status']) && !empty(trim($_POST['status']))){
        $status = $_POST['status'];
    }else{
        $error['status'] = "Select status";
    }

    if(isset($_POST['description']) && !empty(trim($_POST['description']))){
        $description = $_POST['description'];
    }else{
        $error['description'] = "Enter description";
    }

    if(isset($_FILES['img']) && !empty($_FILES['img']['name'])){
        $img = $_FILES['img']['name'];
    }else{
        $error['img'] = "Select image";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>

<h1>Product</h1>

<form action="" method="POST" enctype="multipart/form-data">

    <label>Category</label>
    <select name="category">
        <option value="">Select Category</option>
        <option value="electronics" <?php if($category=="electronics") echo "selected"; ?>>Electronics</option>
        <option value="clothing" <?php if($category=="clothing") echo "selected"; ?>>Clothing</option>
        <option value="books" <?php if($category=="books") echo "selected"; ?>>Books</option>
    </select>
    <?php echo $error['category'] ?? ''; ?>
    <br><br>

    <label>Name</label>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <?php echo $error['name'] ?? ''; ?>
    <br><br>

    <label>Price</label>
    <input type="number" name="price" step="0.01" value="<?php echo $price; ?>">
    <?php echo $error['price'] ?? ''; ?>
    <br><br>

    <label>Status:</label>

    <input type="radio" name="status" value="published"
    <?php if($status=="published") echo "checked"; ?>>
    Published

    <input type="radio" name="status" value="unpublished"
    <?php if($status=="unpublished") echo "checked"; ?>>
    Unpublished

    <?php echo $error['status'] ?? ''; ?>
    <br><br>

    <label>Description</label>
    <textarea name="description"><?php echo $description; ?></textarea>
    <?php echo $error['description'] ?? ''; ?>
    <br><br>

    <label>Image</label>
    <input type="file" name="img">
    <?php echo $error['img'] ?? ''; ?>
    <br><br>

    <button type="submit">Save</button>
    <button type="reset">Clear</button>

</form>

</body>
</html>