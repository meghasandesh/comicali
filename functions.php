<?php 
function zeroFormat($number) {
	if(strlen($number) < 2) {
		return '0'.$number;
	}
	
	return $number;
}
?>