<?php
// Сортировка массива методом вставки.
//  
// Сложность O(N^2).

/**
 * 
 */
namespace currentdirectory;

class InsertSort
{
	private $arr = null;
	private $name = "МЕТОД ВСТАВКИ";
	
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

			for ($i=1; $i < count($arr); $i++) { 
				$leftIndex = $i-1;
				$rightValue = $arr[$i];
				while ($leftIndex >= 0 && $arr[$leftIndex] > $rightValue) {
					$arr[$leftIndex+1] = $arr[$leftIndex];
					$leftIndex--;
				}
				$arr[++$leftIndex] = $rightValue;
			}

			$this->setArr($arr);
			return true;
		}
	}
}

?>