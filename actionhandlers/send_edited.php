<?php
    $connection = mysqli_connect("localhost", "root", "","projects");

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } 

    $new_name = $_POST["prod"];
    $new_price = (float)$_POST["price"];
    $new_ava = (int)$_POST["ava"];
    $ava = (int)$_POST["old_ava"];
    $name = $_POST["old_name"];
    $src = $_POST["src"];

    //print_r($_POST);
    
    $sql =  "UPDATE shop SET product='$new_name', price=$new_price , available=$new_ava, source= '$src' WHERE product='$name' AND available=$ava";

    echo $sql;
    $retval = mysqli_query($connection, $sql);
            if(! $retval ) {
            die('Could not edit data: ' . mysqli_error());
            } 
            echo "Edited data successfully\n";

    header("Location: retrieve_products.php");
    exit;
?>
