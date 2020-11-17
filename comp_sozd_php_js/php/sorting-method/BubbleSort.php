<?php
// Сортировка массива методом пузырька.
// Максимальный элемент массива поднимается вверх, таким образом чтобы отсортировать массив, в самом плохом варианте(массив отсортирован {9, 8, 7, 6, 5, 4, 3, 2, 1, 0} наоборот), нужно пройтись по массиву с каждым элементом до конца.
// Сложность в данном случае будет O(N2).

/**
 * 
 */
namespace currentdirectory;

class BubbleSort
{
	private $arr = null;
	private $name = "МЕТОД ПУЗЫРЬКА";
	
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
	
			$sorted = false;
			while (!$sorted) {
				$sorted = true;
				for ($i=0; $i < count($arr) - 1; $i++) {
					if ($arr[$i] > $arr[$i + 1]) {
						$tmp = $arr[$i + 1];
						$arr[$i + 1] = $arr[$i];
						$arr[$i] = $tmp;
						$sorted = false;
					}
				}
			}
	
			$this->setArr($arr);
			return true;
	
		}
	}
}

?>