<?php

// continue문 : 루프내에서 사용하며 해당 루프의 나머지 부분을 건너뛰고 다음 조건식 판단으로 넘어간다

$exceptNum = 4;
for($i = 0;$i < 100; $i++){
    if($i % $exceptNum == 0){
        continue;
    }
    echo "{$i}"."\n";
}

// break : break문은 루프 내에서 사용한다 해당 반복문을 완전히 종료시키고, 반복문 다음 위치한 명령문으로 이동시킨다.
// 반복문을 완전히 빠져나가고 싶을때 사용한다.

$sum = 0;
$startNum = 1;
$endNum = 100;
$i = $startNum;

while(true){
    $sum += $i;
    if($i == $endNum){
        break;
    }
    $i++;
}
echo $startNum."to ".$endNum."'s sum is ".$sum."\n";
?>