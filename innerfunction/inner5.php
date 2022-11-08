<?php

/**
 * 최대값과 최솟값
 * 
 * max() 함수는 전달받은 수 중에서 가장 큰 수를 반환하며
 * min() 함수는 가장 작은 수 를 반환한다
 * 
 */

 $arr1 = array(1,2,3,4,5);

 echo "Biggest value of \$arr1 : ".max($arr1)."\n";
 echo "Smallest value of \$arr1 : ".min($arr1)."\n";

/**
 * 올림과 내림
 * 
 * floor() : 버림
 * ceil() : 올림
 * round() : 소수점에서의 반올림을 할 수 있다.
 * 
 */

 echo floor(10.95)."\n";
 echo ceil(11.01)."\n";
 echo round(10.5)."\n";

?>