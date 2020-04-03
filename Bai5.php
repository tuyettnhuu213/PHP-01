<?php
	$arr = array(1,4,2,6,9,100,4,);
	$count = count($arr);
	echo "Mảng của ta là: ";
	for ($i=0; $i < $count; $i++) { 
   	echo " $arr[$i];";
    }
	rsort($arr);
	 echo "<br> Mảng sau khi sắp xếp: ";
  
foreach( $arr as $n) {
    echo "$n; ";
}
   
 ?>