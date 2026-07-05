<?php
$error = [];

$name = "";
$rank = "";
$status = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['category-name']) && !empty(trim($_POST['category-name']))){
        $name = $_POST['category-name'];
    }else{
        $error['name'] = "Enter category name";
    }

     if(isset($_POST['rank']) && !empty(trim($_POST['rank']))){
        $rank = $_POST['rank'];
    }else{
        $error['rank'] = "Enter rank";
    }

    if(isset($_POST['status']) && !empty(trim($_POST['status']))){
        $status = $_POST['status'];
    }else{
        $error['status'] = "Select status";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Form</title>
</head>
<body>

<h1>Category</h1>

<form method="POST">
    <label for="category-name">Category Name:</label>
    <input type="text"  id="category-name"   name="category-name" value="<?php echo $name; ?>">
    <?php
    if(isset($error['name'])){
        echo $error['name'];
    }
    ?>
    <br><br>
    <label for="rank">Rank:</label>
    <input  type="number" id="rank" name="rank" value="<?php echo $rank; ?>">
    <?php
    if(isset($error['rank'])){
        echo $error['rank'];
    }
    ?>
    <br><br>
    <label>Status:</label>
    <input type="radio"  name="status" value="published" <?php if($status=="published") echo "checked"; ?>>
    Published
    <input type="radio" name="status" value="unpublished" <?php if($status=="unpublished") echo "checked"; ?>>
    Unpublished
    <?php
    if(isset($error['status'])){
        echo $error['status'];
    }
    ?>
    <br><br>
    <button type="submit" name="save">Save</button>
    <button type="reset" name="clear">Clear</button>

</form>

</body>
</html>