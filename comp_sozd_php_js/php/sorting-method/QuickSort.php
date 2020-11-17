<?php
// Быстрая сортировка массива.
// 

/**
 * 
 */
namespace currentdirectory;

class BubbleSort
{
	private $arr = null;
	private $name = "Быстрая сортировка";
	
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
	
			
	
			$this->setArr($arr);
			return true;
	
		}
	}
}

?>