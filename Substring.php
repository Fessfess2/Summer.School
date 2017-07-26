<?php
class MaximumUniqueSubstring {
  public function findMaximumUniqueSubstring($str) {
    $result = '';
	while (strlen($str)>0) {
		$result.=$str[0];
		$str = str_replace($str[0],'',$str);
	}
	echo $result;
  }
}
?>