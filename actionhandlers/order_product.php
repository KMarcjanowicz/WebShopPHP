<?php
    $connection = mysqli_connect("localhost", "root", "","projects");

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } 

    $name = $_POST["name"];
    $ava = (int)$_POST["ava"];
    $new_ava = $ava - 1;
    print_r($new_ava);
    
    $sql =  "UPDATE shop SET available=$new_ava WHERE product='$name' AND available=$ava";

    echo $sql;
    $retval = mysqli_query($connection, $sql);
            if(! $retval ) {
            die('Could not edit data: ' . mysqli_error());
            } 
            echo "Edited data successfully\n";

    header("Location: retrieve_products.php");
    exit;
?>