<?php
// Сортировка массива методом выборки.
// В начале предпологается что в первом индексе массива уже содержиться минимальное значение $min = $arr[0], для проверки этого утверждения проходим по всему массиву элементов и если мы находим элемент с меньшим значением чем текущий минимум - меняем их местами и запоминаем новый минимум.
// Сложность O(N^2).

/**
 * 
 */
namespace currentdirectory;

class SelectSort
{
	private $arr = null;
	private $name = "МЕТОД ВЫБОРКИ";
	
	private function setArr($arr){
		$this->arr = $arr;
	}
	public function getArr(){
		return $this->arr;
	}
	public function getName(){
		return $this->name;
	}
	
	function sort($arr){
		if (count($arr) <= 1) {
	
			$this->setArr($arr);
			return true;
	
		}else{

			for ($i=0; $i < count($arr); $i++) { 
				$min = $i;
				for ($k=$i+1; $k < count($arr); $k++) { 
					if ($arr[$k] < $arr[$min]) {
						$min = $k;
					}
				}
				$tmp = $arr[$i];
				$arr[$i] = $arr[$min];
				$arr[$min] = $tmp;
			}

			$this->setArr($arr);
			return true;
		}
	}
}

?>