<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запись нового студента</title>
    <link rel="stylesheet" href="/pop-it-mvc/public/2zd/nstud.css">
</head>
<body>
    <div class="header2">
        <p>Запись нового студента</p>
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная страница</a>
    </div>
    <div class="stud">

        <form method="post" class="stud1">
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <input type="text" name="Фамилия" placeholder="Фамилия">
            <input type="text" name="Имя" placeholder="Имя">
            <input type="text" name="Отчество" placeholder="Отчество">
            <input type="text" name="Пол" placeholder="Пол">
            <input type="date" name="birthday" placeholder="Дата рождения">
            <input type="text" name="Адрес" placeholder="Адрес прописки">
            <?php
            echo('Выбор группы:');
            echo '<select  name="GroupID">';
            foreach ($groups as $Group) {
                echo "<option value=\"$Group->GroupID\">" . $Group->GroupID . "</option>";
            }
            echo '</select>';
            ?>
            <button type="submit" >Создать</button>
        </form>

    </div>
</body>
</html>