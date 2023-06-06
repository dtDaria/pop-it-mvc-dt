<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание группы</title>
    <link rel="stylesheet" href="/pop-it-mvc/public/2zd/Sgroup.css">
</head>
<body>
<div class="header1">
    <p>Создание группы</p>
    <a href="<?= app()->route->getUrl('/hello') ?>">Главная страница</a>
</div>
<div class="group">

    <form method="post" class="group1">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="text" name="Курс" placeholder="Курс">
        <input type="text" name="Номер_группы" placeholder="Номер группы">
        <button type="submit">Создать</button>
    </form>

</div>
</body>
</html>
