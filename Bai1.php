<?php
	$a = 2; $b = 3 ; $c=-1;
 	echo "A = $a";
 	echo "<br> B = $b";
 	echo "<br> C = $c";
 	echo "<br> Kết quả của phương trình bậc 2 Ax^2 + Bx + C: ";
 	$delta = $b*$b - 4*$a*$c;
    if($delta<0){
        echo "Phương trình vô nghiệm";
    }
    else if($delta==0){
        $x = -$b/(2*$a);
        echo "Phương trình có nghiệm kép $x";
    }
    else{
        $delta = sqrt($delta);
        $x1 = (-$b + $delta) / (2*$a);
        $x2 = (-$b - $delta) / (2*$a);
        echo "Phương trình có hai nghiệm là X1 = $x1 và X2 = $x2";
    }
 ?>