<!DOCTYPE html>
<html>

<head>
    <title>Report Bug</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../../assets/script.js"></script>
</head>

<body>
    <form action="" method="post">
        <label for="bug_name">Bug: </label><br>
        <input type="text" name="bugname" id="bug_name" size="30"></input><br><br>
        <label for="bug_desc">Description: </label><br>
        <textarea name="bugdesc" id="bug_desc" cols="50" rows="3"></textarea><br><br>
        <input type="submit" name="Report" value="Report" onClick=" return validate_form(this.form);"> Or <a href="upload.php">upload report</a> instead!
        <br>
    </form>
</body>

</html>
<?php
include("../session.php");
include("../../config/config.php");

$bugName = mysqli_real_escape_string($conn, $_REQUEST['bugname']);
$bugDesc = mysqli_real_escape_string($conn, $_REQUEST['bugdesc']);

$insert = "insert into buglist (bug_name, bug_desc) values ('$bugName', '$bugDesc')";
$last = "select bug_name, bug_desc from buglist order by id desc limit 1";
$lastRow = mysqli_fetch_array(mysqli_query($conn, $last), MYSQLI_ASSOC);
// $result = mysqli_query($conn, $insert) or die ('<pre>'. mysqli_error($conn) . '</pre>');
if (mysqli_query($conn, $insert)) {
    echo '<br>Last Reported Bug';
    echo '<br>Bug Name: ' . $lastRow['bug_name'];
    echo '<br>Description: ' . $lastRow['bug_desc'];
} else {
    echo "error: Could not able to execute $sql." . mysqli_error($conn);
}

mysqli_close($conn);
?>