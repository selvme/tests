<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task1php</title>
</head>
<body>
<form action="" name="form1" method="post">
    <label for="n">Число</label>
    <input type="number" name="n" id="n"><br /><br />
    <label for="m">Месяц</label>
    <input type="number" name="m" id="m"><br /><br />
    <input type="submit" name="done" value="Показать">
</form>
<h4>Правильный вариант:
<?php
$date = function ($n, $m)
{
    switch (+$m) {
        case 1:
            echo ($n . ' ' . 'Января');
            break;
        case 2:
            echo ($n . ' ' . 'Февраля');
            break;
        case 3:
            echo ($n . ' ' . 'Марта');
            break;
        case 4:
            echo ($n . ' ' . 'Апреля');
            break;
        case 5:
            echo ($n . ' ' . 'Мая');
            break;
        case 6:
            echo ($n . ' ' . 'Июня');
            break;
        case 7:
            echo ($n . ' ' . 'Июля');
            break;
        case 8:
            echo ($n . ' ' . 'Августа');
            break;
        case 9:
            echo ($n . ' ' . 'Сентября');
            break;
        case 10:
            echo ($n . ' ' . 'Октября');
            break;
        case 11:
            echo ($n . ' ' . 'Ноября');
            break;
        case 12:
            echo ($n . ' ' . 'Декабря');
            break;
    }
};
    if ($_POST['done'] && $_POST['n'] && $_POST['m'])
    {
        if (+($_POST['n'])>=1 && +($_POST['n'])<=31)
        {
            if (+($_POST['m'])>=1 && +($_POST['m'])<=12)
            {
                echo $date($_POST['n'], $_POST['m']);
            } else
                echo ("Вы не верно указали месяц");
        } else
            echo ("Вы не верно указали дату");
    } else
        echo ("Вы не ввели все данные");
?>
</h4>

</body>
</html>