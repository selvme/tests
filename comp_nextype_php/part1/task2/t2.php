<!--#!/usr/bin/env php-->

<?php

function getItemsFromDate($date)
{
    $filename = __DIR__ . "/data.json";
    
    if (!file_exists($filename)) {
        throw new Exception("File not found.");
    }

    $data = json_decode(file_get_contents($filename), true);
    $callback = function($item) use ($date)
                {
                    if (strtotime($item['created']) >= strtotime($date)) {
                        return true;
                    }

                    return false;
                };

    $result = array_filter($data, $callback);
    
    return $result;
}

echo "<pre>";
print_r(getItemsFromDate("20.01.2020 12:00:00"));
echo "</pre>";
