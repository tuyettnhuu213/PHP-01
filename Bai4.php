<?php
$arr = array(1,4,2,6,9,100,45,8,20);
$count = count($arr);
echo "Mảng của ta là: ";
for ($i=0; $i < $count; $i++) { 
echo " $arr[$i];";
}

$max = $arr[0];
for ($i=0; $i < $count; $i++) { 
if ($max <= $arr[$i]) {
$max = $arr[$i];
}
}
echo "<br> Phần tử lớn nhất là: ".$max;
?>