<?php
   include('session.php');
?>
<!-- <html">
    <head>
        <title>Admin - RatOnLab Gallery</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
   
    <body>
        <h1>Welcome To admin Page</h1>
        <p>
            <font size="3em">
                This is the recent admin page that we are currently building. It is just a simple and rough implementation, so we don't really think about the design.
                We are not implementing much function yet in this page. For now we are only implementing the function to show the customer data (dummy data),
                since our database engineer is currently creating the database, so we are waiting for it right now. If you find any bug in the Implemented function, 
                please <a href="report/" style="text-decoration:none;">report </a> to Alen.
            </font>
        </p>
        <h4><a href = "customer/" style="text-decoration:none;">Customer</a></h4>
        <h4><a href = "logout.php" style="text-decoration:none;">Sign Out</a></h4>
    </body>
   
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin - RatOnLab Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    /* li a:hover:not(.active) {
    background-color: #ddd;
    }

    li a.active {
    color: white;
    background-color: #4CAF50;
    } */
    </style>
</head>
<body>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="customer/">Customer</a></li>
  <li><a href="#contact">Gallery Product</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>