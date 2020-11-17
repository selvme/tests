<?php

namespace currentdirectory;
include 'BubbleSort.php';
include 'SelectSort.php';
include 'InsertSort.php';
include 'MergeSort.php';
include 'RegExp.php';

// Блок инициализации
$arr = [
	// [777],
	// [9, 8, 7, 6, 5, 4, 3, 2, 1, 0],
	// [11,15],
	// [7, 16, 23, 5, 9, 11, 17, 66, 12, 54],
	// generateRandomArr(100),
	// generateRandomArr(3000),
];

// // Блок выполнения
// $bubble = new BubbleSort();
// execution($bubble, $arr);

// $select = new SelectSort();
// execution($select, $arr);

// $insert = new InsertSort();
// execution($insert, $arr);

// $merge = new MergeSort();
// execution($merge, $arr);


// //

// Блок функций
function execution($object, $arr){
	printf("============ %s Start ============", $object->getName());
	echo "<br />";
	echo "<br />";
	foreach ($arr as $ar) {
		$startTime = round((float)microtime(true)*1000);
		$object->sort($ar);
		$endTime = round((float)microtime(true)*1000);
		echo "<br />";
		printf("На массив объемом в %d элемент(ов), затраченно времени: %d мс", count($ar), $endTime - $startTime);
		echo "<br />";
		// echo "<pre>";
		// var_dump($object->getArr());
		// echo "</pre>";
		// echo "<br />";
		echo "-------------------------------------";
		echo "<br />";
	}
	echo "<br />";
	echo "<br />";
}
function generateRandomArr($copasity){
	$arr = [];
	$cop = $copasity;
	$range = PHP_INT_MAX;
	for ($i=0; $i < $cop; $i++) { 
		$arr[$i] = rand(0, $range);
	}
	return $arr;
}

?>