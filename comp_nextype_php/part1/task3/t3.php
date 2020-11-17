#!/usr/bin/env php

<?php

$array = [
    [
        'sort' => '20',
        'name' => 'Mike'
    ],
    [
        'sort' => '10',
        'name' => 'Adam'
    ],
    [
        'sort' => '40',
        'name' => 'Stive'
    ],
    [
        'sort' => '300',
        'name' => 'Jane'
    ],
];

function sortArrayDesc($prev, $next) 
{
    $first = $prev['sort'];
    $second = $next['sort'];
    
    if ($first == $second) {
        return 0;
    }
    if ($first < $second) {
        return 1;
    }
    
    return -1;
}

usort($array, 'sortArrayDesc');

echo "<pre>";
print_r($array);
echo "</pre>";
