<?php

if (!isset($_POST['name'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    return;
}

$name = $_POST['name'];
$country = $_POST['country'];
$comment = $_POST['comment'];

include 'dbConnection.php';
$conn = new Connection();
$sql = "INSERT INTO comment VALUES('$name','$country','$comment')";
$conn->query($sql);
header("location:comments.php");
?>