<?php

    $curl = curl_init();

    $search_word =  $_POST["n"];
    $price = $_POST["p"];
    $ava = $_POST["a"];

    $url = "https://www.amazon.com/s/field-keywords=$search_word";

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_ENCODING, 'identity');
    curl_setopt($curl, CURLOPT_COOKIE, true);

    $res = curl_exec($curl);

    preg_match_all("!https://images-na.ssl-images-amazon.com/images/I/[^\s]*?._AC_US218_.jpg!", $res, $mat );

    $imgs = array_values(array_unique($mat[0]));

    for($i = 0; $i < count($imgs); $i++){
        echo "<form action='add_product.php' method='post'>";
        echo '<input type="hidden" name="n" value="'.$search_word.'">';
        echo '<input type="hidden" name="p" value="'.$price.'">';
        echo '<input type="hidden" name="a" value="'.$ava.'">';
        echo '<input type="hidden" name="s" value="'.$imgs[$i].'">';
        echo "<div style='float: left; margin: 10 0 0 0; '>";
        echo "<img src='".$imgs[$i]."'/>";
        echo "<input type='submit' value='WYBIERZ' style='display: inline'>";
        echo "</div>";
        echo "</form>";
    }



?>