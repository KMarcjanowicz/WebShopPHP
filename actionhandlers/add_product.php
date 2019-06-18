<?php
    $connection = mysqli_connect("localhost", "root", "","projects");
    //print_r($_POST);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } 

    $name = $_POST["n"];
    $price = $_POST["p"];
    $ava = $_POST["a"];
    $src = $_POST["s"];

    mysqli_query($connection, "INSERT INTO  shop (product, price, available, source) VALUES('$name', '$price', '$ava', '$src')");
    header("Location: ./../index.php");
    exit;
?>