<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение</title>
    <link rel="stylesheet" href="/pop-it-mvc/public/2zd/izm.css">
</head>
<body>
<div class="header4">
    <p>Изменение</p>
    <a href="<?= app()->route->getUrl('/hello') ?>">Главная страница</a>
</div>
<div class="izm1">
    <input type="text" name="izmenenie1" placeholder="1:">
    <input type="text" name="izmenenie2" placeholder="2:">
    <input type="text" name="izmenenie3" placeholder="3:">
    <input type="text" name="izmenenie4" placeholder="4:">
    <input type="text" name="izmenenie5" placeholder="5:">
    <input type="text" name="izmenenie6" placeholder="6:">
    <input type="text" name="izmenenie7" placeholder="7:">
    <input type="text" name="izmenenie8" placeholder="8:">
</div>
<div class="izm2">
    <button>Изменить</button>
</div>
</body>
</html>
