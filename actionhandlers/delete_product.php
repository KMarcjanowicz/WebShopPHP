<?php
    $connection = mysqli_connect("localhost", "root", "","projects");
    print_r($_POST);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } 

    $name = $_POST["name"];
    $price = (float)$_POST["price"];
    $ava = (int)$_POST["ava"];

    //print_r(gettype($price));
    //print_r(gettype($ava));


    $sql =  "DELETE FROM shop WHERE product='$name' AND available=$ava";

    $retval = mysqli_query($connection, $sql);
            if(! $retval ) {
               die('Could not delete data: ' . mysqli_error());
            } 
            echo "Deleted data successfully\n";

    header("Location: retrieve_products.php");
    exit;

?>