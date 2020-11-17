<?php

$filename = __DIR__ . "/data.json";

if (!file_exists($filename)) {
    header("HTTP/1.1 500 File Not Found");
    exit(1);
}

$result = [];
$viewed = filter_input(INPUT_GET, 'set_viewed');
$cookie = filter_input(INPUT_COOKIE, 'userSawThisNews-' . $viewed);
$result = json_decode(file_get_contents($filename), true);

if ($viewed && !$cookie) {
    $indexOfNews = false;
   
    for ($i = 0; $i < count($result); $i++) {
        if (array_search($viewed, $result[$i])) {
            $indexOfNews = $i;
        }
    }
    
    if ($indexOfNews !== false) {
        $result[$indexOfNews]['viewed']++;
        file_put_contents($filename, json_encode($result));
        setcookie('userSawThisNews-' . $viewed, date("Y-m-d"));
    }
}

?>

<?php foreach ($result as $item): ?>
<div>
    <b><?=$item['name']?></b><br>
    <small>Viewed: <?=$item['viewed']?></small><br>
    <?=$item['text']?><br><br>
    <a href="?set_viewed=<?=$item['id']?>">I watched</a>
    <hr>
</div>
<?php endforeach; ?>

