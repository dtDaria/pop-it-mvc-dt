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

    <a href="<?= app()->route->getUrl('/login') ?>">Выход (<?= app()->auth::user()->login ?>)</a>
</div>

<div class="ad1">
    <?php
    if (app()->auth::user()->Admin()):
    ?>
    <a href="<?= app()->route->getUrl('/sgroup') ?>">Создать группу</a>
    <a href="<?= app()->route->getUrl('/nstud') ?>">Создание студента</a>
    <a href="<?= app()->route->getUrl('/sdis') ?>">Создать дисциплины</a>
    <a href="<?= app()->route->getUrl('/strStud') ?>">Страница студента</a>
    <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация нового пользователя</a>
    <?php endif; ?>
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

    <?php
    foreach ($students as $student) {
        echo '<h5>Имя</h5>'  . $student->Имя . '<h5>Фамилия</h5>' . $student->Фамилия . '<h5> Отчетсво</h5>' . $student->Отчество;
        echo '<h5>Курс</h5>'  . $student->Курс;
        echo '<h5>Номер группы</h5>' . $student->Номер_группы;
        echo '<h5>Успеваемость</h5>' . $student->Оценка;
        echo '<h5>Дисциплина</h5>' . $student->Название;
        echo '<h5>Часы</h5>' . $student->Часы;
        echo '<h5>Семестр</h5>' . $student->Семестр;

    }
    ?>
    
</div>
</body>
</html>
