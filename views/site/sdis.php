<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание дисципдины</title>
    <link rel="stylesheet" href="/pop-it-mvc/public/2zd/dis.css">
</head>
<body>
<div class="header3">
    <p>Дисциплина</p>
    <a href="<?= app()->route->getUrl('/hello') ?>">Главная страница</a>
</div>
<div class="dis">

    <form method="post" class="dis1">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="text" name="Название" placeholder="Название">
        <input type="text" name="Часы" placeholder="Часы">
        <input type="text" name="Семестр" placeholder="Семестр">
        <?php
        echo('Выбор контроля:');
        echo '<select  name="KontrID">';
        foreach ($kontr as $Kontr) {
            echo "<option value=\"$Kontr->KontrID\">" . $Kontr->KontrID . "</option>";
        }
        echo '</select>';
        ?>
        <button type="submit" >Создать</button>
    </form>
</div>
</body>
</html>
