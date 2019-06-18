<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update record</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    $name = $_POST["name"];
    $price = (float)$_POST["price"];
    $ava = (int)$_POST["ava"];
    $src = $_POST["src"];

?>
    <form action='send_edited.php?' method='POST'>
        <input type='text' value=<?php echo (isset($name))?$name:'';?> name='prod'>
        <input type='text' value=<?php echo (isset($price))?$price:'';?> name='price'>
        <input type='text' value=<?php echo (isset($ava))?$ava:'';?> name='ava'>
        <input type='text' value=<?php echo (isset($src))?$src:'';?> name='src'>
        <input type='hidden' value=<?php echo (isset($name))?$name:'';?> name='old_name'>
        <input type='hidden' value=<?php echo (isset($ava))?$ava:'';?> name='old_ava'>
        <input type='submit' value='SEND' style='display: inline'>
    </form>
</body>
</html>
