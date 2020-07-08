<?php
include("../../config/config.php");
include("../session.php");

if (isset($_GET['Submit'])) {
    $id = $_GET['id'];
    $getID = "select first_name, last_name, card_number from customers where id_customer = '$id' LIMIT 0,1";

    $result = mysqli_query($conn, $getID);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($row) {
        echo "<br>";
        echo "<font size='3' color='black'>";
        echo 'First Name: ' . $row["first_name"];
        echo "<br>";
        echo 'Last Name: ' . $row["last_name"];
        echo "<br>";
        echo 'Card Number: ' . $row["card_number"];
        echo "</font>";
    } else {
        echo "<br>";
        echo '<font color= "red">';
        print_r(mysqli_error($conn));
        echo "</font>";
    }
}
?>
<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Customer Page</title>
        <link rel="stylesheet" href="../../assets/style.css">
    </head>
    <body>
        <h3>Customer Id</h3>
        <form action="#" method="GET">
            <input type="text" name="id">
            <input type="submit" name="Submit" value="Submit">
            
        </form>
    </body>
</html> -->