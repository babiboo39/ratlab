<?php

if (isset($_POST['submit'])) {

    $target_dir  = 'files/';
    $target_path = $target_dir . basename($_FILES['file']['name']);
    $uploadOk    = false;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
        $uploadOk = true;
    } else {
        die("Problem uploading file");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Report</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <p>Upload Your Report:</p>
        <input type="file" name="file" />
        <br />
        <br />
        <input type="submit" name="submit" value="Upload"/>
    </form>
    <?php
    if ($uploadOk) {
        echo "<pre>Upload Success:</pre>";
        echo "<pre>{$target_path} successfully uploaded</pre>";
    }
    ?>
</body>
</html>