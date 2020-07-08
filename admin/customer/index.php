<!DOCTYPE html>
<html>

<head>
    <title>Customer Page</title>
    <link rel="stylesheet" href="../../assets/style.css">
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
        <li><a href="/admin">Home</a></li>
        <li><a href="#">Customer</a></li>
        <li><a href="#contact">Gallery Product</a></li>
        <li style="float:right"><a href="../logout.php">Logout</a></li>
    </ul>
    <h2>Customer Data</h2>
    <form action="search.php" method="GET">
            <input type="text" name="id">
            <input type="submit" name="Submit" value="Submit">
    </form>
    <?php
    include("../../config/config.php");
    include("../session.php");

    $query = "select * from customers";
    $result = mysqli_query($conn, $query);

    echo "<table>";
    echo "<tr><th>Id</th><th>FirstName</th><th>LastName</th><th>Occupation</th><th>Address</th><th>CardNumber</th>";
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<tr><td>" . $row["id_customer"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["occupation"] . "</td><td>" . $row["address"] . "</td><td>" . $row["card_number"] . "</td></tr>";
        }
    }

    echo "</table>";

    mysqli_close($conn);
    ?>

</body>

</html>