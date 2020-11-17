<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task1php</title>
</head>
<body>
   <form action="" name="form1" method="post">
       <label for="sum">Сумма вклада</label>
       <input type="number" name="sum" id="sum"><br /><br />
       <label for="pers">Процент вклада в год</label>
       <input type="number" name="pers" id="pers"><br /><br />
       <label for="m">Срок в месяцах</label>
       <input type="number" name="m" id="m"><br /><br />
       <input type="submit" name="done" value="Расчитать">
   </form>
   <br>
   <br>
   <h4>Ваши накопления за период: <?php
       if (($_POST['done']) && ($_POST['sum'])) {
           $m = +($_POST['m']);
           $s = +($_POST['sum']);
           $p = +($_POST['pers']);
           $p = round($m*$p/12);
           $r = round($s + ($s / 100 * $p));
       }
       echo ($r);
       ?></h4>


    
</body>
</html>