<?php
if (isset($_POST['submit'])) {

    $target_dir  = 'files/';
    $target_path =  $target_dir . basename($_FILES['uploaded']['name']);
    $uploadOk    = false;

    if(!move_uploaded_file($_FILES['uploaded']['tmp_name'], $pathTarget)) {
        echo '<pre>Your file was not uploaded</pre>';
    } else {
        echo "<pre>{$pathTarget} successfully uploaded</pre>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <p>Choose File:</p>
            <input type="file" name="file" accept="*"/>
            <br/>
            <br/>
            <input type="submit" name="submit"/>
        </form>
    </body>
</html>