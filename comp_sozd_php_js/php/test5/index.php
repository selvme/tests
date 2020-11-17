<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task3php</title>
</head>
<body>
<form action="index.php" name="form1" method="post")>
    <label for="n">Введите часы</label>
    <input type="number" name="n" id="n"><br /><br />
    <label for="m">Введите минуты</label>
    <input type="number" name="m" id="m"><br /><br />
    <input type="submit" name="done" value="Посчитать угол между стрелками">
</form>
<h4>Результат:
    <?php
    $calc = function ($n, $m)
    {
        $t = ($n*5-$m)*6;
        echo ($t);
    };
    if ($_POST['done'] && $_POST['n'] && $_POST['m'])
    {
        $calc(+$_POST['n'], +$_POST['m']);
    }
    ?>

</h4>
</body>
</html>