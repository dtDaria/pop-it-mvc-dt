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
    </div>
    <div class="stud">

        <form method="post" class="stud1">
            <input type="text" name="Фамилия" placeholder="Фамилия">
            <input type="text" name="Имя" placeholder="Имя">
            <input type="text" name="Отчество" placeholder="Отчество">
            <input type="text" name="Пол" placeholder="Пол">
            <input type="date" name="birthday" placeholder="Дата рождения">
            <input type="text" name="Адрес" placeholder="Адрес прописки">
            <select name="GroupID">
                <?php
                foreach ($groups as $group){
                    echo "<option value=\"$group->GroupID\">" . $group->Номер_группы . '</option>';
                }
                ?>
            </select>
            <button class="vhod">Вход</button>
        </form>

    </div>
</body>
</html>