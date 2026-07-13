<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_FILES['profile']['error'] == 0) {
        if ($_FILES['profile']['size'] < 10485760) {

            $types = ['csv' => 'text/csv'];

            if (in_array($_FILES['profile']['type'], $types)) {
                echo "CSV file uploaded successfully";
            } else {
                echo "Only CSV files are allowed";
            }

        } else {
            echo "File size exceeds the limit (max 10mb)";
        }

    } else {
        echo "File upload error: " . $_FILES['profile']['error'];
    }

} else {
    echo "Invalid request method. Please use POST.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

    <h2>Upload CSV File</h2>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="profile" accept=".csv" required>
        <br><br>
        <input type="submit" name="submit" value="Upload">
    </form>

</body>
</html>