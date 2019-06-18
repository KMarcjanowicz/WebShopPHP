<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sklep Internetowy</title>
</head>
<body>
    <div id ="products">
        <form action="actionhandlers/retrieve_products.php" method="post">
            View products
            <input type="submit">
        </form>
    </div>
    <div id="opers">
        <form action="actionhandlers/choose_img.php" method="post">
        Name: <input type="text" name="n"><br>
        Price: <input type="text" name="p"><br>
        Available: <input type="text" name="a"><br>
        <input type="submit">
        </form>
    </div>
</body>
</html>