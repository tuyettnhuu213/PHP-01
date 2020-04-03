<?php
	$n = 9;
	$gthua = 1;
	$tong = 0;
 	echo "N = $n";
 	for ($i=1; $i <=$n ; $i++) { 
 		$gthua = $gthua*$i;
 		$tong = $tong + $i/$gthua;
 	}
 	echo "<br> Kết quả của tổng S = 1/1! + 2/2! + .. n/n! = $tong";
 ?>