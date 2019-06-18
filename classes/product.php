<?php
    class Product {

        private $name;
        private $price;
        private $ava;
        private $src;

        function __construct($a, $b, $c, $d) {
            $this->name = $a;
            $this->price = $b;
            $this->ava = $c;
            $this->src= $d;

            $this->createDiv();
        }

        function createDiv (){
            echo ("<div style='width: 200px; height: 400px; background-color: #ccffe6; text-align: center; display: inline-block; margin: 10px;'>
                    <p>".$this->name."</p>
                    <img src=".$this->src." style='width:150;'/>
                    <p>Cena: ".$this->price." zł</p>
                    <p>Dostępna ilość: ".$this->ava."</p>
                    <form action='delete_product.php' method='POST'>
                        <input type='hidden' value='".$this->name."' name='name'>
                        <input type='hidden' value='".$this->price."' name='price'>
                        <input type='hidden' value='".$this->ava."' name='ava'>
                        <input type='submit' value='DELETE' style='display: inline'>
                    </form>
                    <form action='edit_product.php' method='POST'>
                        <input type='hidden' value='".$this->name."' name='name'>
                        <input type='hidden' value='".$this->price."' name='price'>
                        <input type='hidden' value='".$this->ava."' name='ava'>
                        <input type='hidden' value='".$this->src."' name='src'>
                        <input type='submit' value='EDIT' style='display: inline'>
                    </form>
                    <form action='order_product.php' method='POST'>
                        <input type='hidden' value='".$this->name."' name='name'>
                        <input type='hidden' value='".$this->price."' name='price'>
                        <input type='hidden' value='".$this->ava."' name='ava'>
                        <input type='submit' value='ORDER' style='display: inline'>
                    </form>
                </div>");
        }
    }
?>