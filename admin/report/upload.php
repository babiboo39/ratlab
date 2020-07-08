<!DOCTYPE html>
<html>
    <head>
        <title>Upload Report</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form enctype="multipart/form-data" action="#" method="post">
            <input type="hidden" name="MAX_FILE_SIZE" value="100000">
            Choose File to Upload:<br><br>
            <input name="uploaded" type="file"><br>
            <br>
            <input type="submit" name="Upload" value="Upload">
        </form>
    </body>
</html>

<?php

if(isset ($_POST['Upload'])) {
    $pathTarget = "files/";
    $pathtarget = basename($_FILES['uploaded']['name']);

    if(!move_uploaded_file($_FILES['uploaded']['tmp_name'], $pathTarget)) {
        echo '<pre>Your file was not uploaded</pre>';
    } else {
        echo "<pre>{$pathTarget} successfully uploaded</pre>";
    }
}
?>