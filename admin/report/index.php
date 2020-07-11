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
    <!-- <script type="text/javascript" src="../../assets/script.js"></script> -->
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
<h2>Send Report</h2>
<form action="report.php" method="post">
    Name   : <br><input type="text" name="name"><br>
    Report : <br>
    <textarea name="report" cols="40" rows="5"></textarea>
    <br><br/>
    <input type="submit" value="Send Report"> or <a href="upload.php">Upload</a> Your Report
</form>

<h3>Latest Report</h3>
<?php
while($row = mysqli_fetch_array($report)) {
    echo "<small>By <b>{$row['name']}</b> on {$row['time']}</small>";
    echo "<p>{$row['reports']}</p>";
    echo "<hr>";
}
?>
</body>
</html>