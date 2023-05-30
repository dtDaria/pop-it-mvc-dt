<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница студента</title>
    <link rel="stylesheet" href="/pop-it-mvc/public/2zd/strStud.css">
</head>
<body>
    <div class="header3">
        <p>Страница студента</p>
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная страница</a>
    </div>
    <div class="str">
        <form>
            <input type="text" name="Группа" placeholder="Группа:">
            <input type="text" name="Студент" placeholder="Студент:">
            <input type="text" name="Дисциплина" placeholder="Дисциплина:">
            <button>Выбрать</button>

        </form>
    </div>
    <div class="str1">
        <p>Успеваемость:</p>
    </div>
    <div class="str2">
        <a href="<?= app()->route->getUrl('/izm') ?>">Изменить</a>
    </div>
    <div class="str3">
        <button>Закрыть</button>
    </div>
</body>
</html>