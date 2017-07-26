<?php
class Brackets {
  public function isBracketSequenceCorrect($str) {
	  $array = array();
    for ($i = 0; $i < strlen($str); $i++) {
		switch($str[$i]) {
			case '(':
			$array[] = $str[$i];
			break;
			case '[':
			$array[] = $str[$i];
			break;
			case '{':
			$array[] = $str[$i];
			break;
			case ')':
			if ($array[count($array)-1] == '(') {
				unset($array[count($array)-1]);
				$array = array_values($array);			
			}
			break;
			case ']':
			if ($array[count($array)-1] == '[') {
				unset($array[count($array)-1]);
				$array = array_values($array);			
			}
			break;
			case '}':
			if ($array[count($array)-1] == '{') {
				unset($array[count($array)-1]);
				$array = array_values($array);			
			}
			break;
			default:
			break;
		}
	}
	if (count($array) == 0) print 'true';
	else print 'false';
  }  
}
?>