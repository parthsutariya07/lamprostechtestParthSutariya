 <?php
 $num1 = [1,2,3,0,0];
$num2 = [2,5,6];
$num3 =array_merge($num2,$num1);
print_r($num3);
sort($num3);
print_r($num3);
?>