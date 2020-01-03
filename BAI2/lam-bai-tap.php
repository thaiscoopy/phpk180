<?php
$a = 5;
$b = 6;
if(($a == 0) && ($b == 0)){
	echo "Phương trình $a X + $b = 0 có nghiệm với mọi giá trị của X";
}
elseif(($a == 0) && ($b !== 0)){
	echo "Phương trình $a X + $b = 0 vô nghiệm với mọi giá trị của X";
}
else{
	$nghiem = -$b/$a;
	echo "Phương trình $a X + $b = 0 có nghiệm X = $nghiem";
}

?>