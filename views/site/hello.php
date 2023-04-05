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
    <p>№:</p>
    <p>Группа:</p>
    <p>ФИО:</p>
    <p>Дисциплина:</p>
    <p>Успеваемость:</p>
    <p>Кол.часов:</p>
</div>

<div>
    <?php
    foreach ($students as $student) {
        echo '<p> StudentID: ' . $student->StudentsID . '</p>';
        echo '<p> Фамилия: ' . $student->Фамилия . '</p>';
        echo '<p> Имя: ' . $student->Имя . '</p>';
        echo '<p> Отчество: ' . $student->Отчество . '</p>';
        echo '<p> Пол: ' . $student->Пол . '</p>';
        echo '<p> День рождение: ' . $student->birthday . '</p>';
        echo '<p> Адрес: ' . $student->Адрес . '</p>';
        echo '<p> GroupID: ' . $student->GroupID . '</p>';
        echo '<p> Группа: ' . $student->Номер_группы . '</p>';
        echo '<br>';
    }
    ?>
</div>

</body>
</html>
