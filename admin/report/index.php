
<!-- <body>
    <form action="" method="post">
        <label for="bug_name">Bug: </label><br>
        <input type="text" name="bugname" id="bug_name" size="30"></input><br><br>
        <label for="bug_desc">Description: </label><br>
        <textarea name="bugdesc" id="bug_desc" cols="50" rows="3"></textarea><br><br>
        <input type="submit" name="Report" value="Report" onClick=" return validate_form(this.form);"> Or <a href="upload.php">upload report</a> instead!
        <br>
    </form>
</body>

</html> -->
<?php
include("../session.php");
include("../../config/config.php");

$report = mysqli_query($conn, "select * from report order by time");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Report</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../../assets/script.js"></script>
    <style>
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
    }

    li {
    float: left;
    }

    li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    </style>
</head>
<body>

<ul>
  <li><a href="../">Home</a></li>
  <li><a href="../customer">Customer</a></li>
  <li><a href="#">Report</a></li>
  <li style="float:right"><a href="../logout.php">Logout</a></li>
</ul>
</body>