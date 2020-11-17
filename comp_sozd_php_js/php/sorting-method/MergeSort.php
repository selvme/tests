<?php
// Сортировка массива методом слияния.
//  
// Сложность T = log n.

/**
 * 
 */
namespace currentdirectory;

class MergeSort
{
	private $arr = null;
	private $name = "МЕТОД СЛИЯНИЯ";
	
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

			$this->mergeSort($arr, 0, count($arr)-1);

			$this->setArr($arr);
			return true;
		}
	}

	private function mergeSort(&$arr, $start, $end)
	{
		if ($start < $end) {
			$mid = (int)(($start + $end) / 2);
			$this->mergeSort($arr, $start, $mid);
			$this->mergeSort($arr, $mid+1, $end);
			$this->merge($arr, $start, $mid, $end);
		}
	}
	private function merge(&$arr, $start, $mid, $end)
	{
		$l = 0;
		$r = 0;

		for ($i=$start; $i <= $mid; $i++) { 
			$left[] = $arr[$i];
		}
		for ($i=$mid+1; $i <= $end; $i++) { 
			$right[] = $arr[$i];
		}

		$left[] = INF;
		$right[] = INF;

		for ($i=$start; $i <= $end; $i++) { 
			if ($left[$l] <= $right[$r] ) {
				$arr[$i] = $left[$l];
				$l++;
			}else{
				$arr[$i] = $right[$r];
				$r++;
			}
		}
	}
}

?>
