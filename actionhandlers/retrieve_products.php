<?php
    $connection = mysqli_connect("localhost", "root", "","projects");
    //print_r($_POST);
    include("./../classes/product.php");

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } 
    
    $sql = "SELECT product, price, available, source FROM shop";
    $result = $connection->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $foo = new Product($row["product"], $row["price"], $row["available"], $row["source"]);
        }
    } else {
        echo "0 results";
    }


?>