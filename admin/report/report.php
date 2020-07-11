<?php

include('../session.php');
include('../../config/config.php');

$name = $_POST['name'];
$report = $_POST['report'];

$insert = mysqli_query($conn, "insert into report (id, time, name, reports) values(, NOW(), '{$name}', '{$report}'");

if ($insert) {
    echo "Your Report has been saved.";
} else {
    echo "there is something error " . mysqli_error($insert); 
}