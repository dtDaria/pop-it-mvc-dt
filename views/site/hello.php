<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администратор</title>
    <link rel="stylesheet" href="/pop-it-mvc/public/2zd/glavn.css">
</head>
<body>
<div class="header">
    <p>Администратор</p>
    <a href="<?= app()->route->getUrl('/log') ?>">Вход</a>
</div>

<div class="ad1">
    <a href="<?= app()->route->getUrl('/sgroup') ?>">Создать группу</a>
    <a href="<?= app()->route->getUrl('/nstud') ?>">Создание студента</a>
    <a href="<?= app()->route->getUrl('/sdis') ?>">Создать дисциплины</a>
    <a href="<?= app()->route->getUrl('/strStud') ?>">Страница студента</a>
</div>

<div class="ad2">
    <form>
        <input type="text" name="dis" placeholder="Дисциплина">
        <input type="text" name="fio" placeholder="ФИО">
        <input type="text" name="gr" placeholder="Группа">
        <button>Найти</button>
    </form>
</div>
<div class="ad3">
    <p>№:</p>
    <p>Группа:</p>
    <p>ФИО:</p>
    <p>Дисциплина:</p>
    <p>Успеваемость:</p>
    <p>Кол.часов:</p>
</div>
</body>
</html>
