<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task3php</title>
</head>
<body>
<form action="index.php" name="form1" method="post")>
    <label for="n">Число</label>
    <input type="number" name="n" id="n"><br /><br />
    <label for="m">Еще число</label>
    <input type="number" name="m" id="m"><br /><br />
    <select name="o">
        <option value="1">Сложение</option>
        <option value="2">Вычитание</option>
        <option value="3">Умножение</option>
        <option value="4">Деление</option>
    </select>
    <input type="submit" name="done" value="Посчитать">
</form>
<h4>Результат:
    <?php
//     print_r($_POST);
    if ($_POST['done'])
    {

        switch ($_POST['o']) {
            case '1':
                echo(+($_POST['n']) + +($_POST['n']));
                break;
            case '2':
                echo(+($_POST['n']) - +($_POST['n']));
                break;
            case '3':
                echo(+($_POST['n']) * +($_POST['n']));
                break;
            case '4':
                echo(+($_POST['n']) / +($_POST['n']));
                break;
        }
    }
    ?>
</h4>
</body>
</html>