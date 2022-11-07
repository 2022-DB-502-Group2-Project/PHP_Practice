<?php
// for statement
// for(초기;조건;증감)
for($i = 0;$i < 10;$i++){
    echo "{$i}"."\n";
}


// foreach : 일반적인 for문과 다른 형태이다.
// foreach문은 배열의 모든 요소를 손쉽게 순회할 수 있도록 한다
// 각 루프마다 각요소를 지정된 변수에 대입한다
// foreach(배열 as 값을 저장할 변수){실행할 반복문}

$arr = array(2,4,6,8);
foreach($arr as $val){
    echo "variable \$val's value is ".$val."\n";
}

// Key : Value 타입의 배열 활용하는 예제이다
$arr = array(
    "two" => 2,
    "four" => 4,
    "six" => 6,
    "eight" => 8
);
// Key : Value형태의 array에 대해서 foreach처리하기
foreach($arr as $key => $value){
    echo "Key : ".$key." | Value : ".$value."\n";
}
// 일반적인 배열에 대해서는 원소의 index를 반환, enumerate 대신 사용할 수 있을듯 하다
$arr = array(1,2,3,4,5);
foreach($arr as $key => $value){
    echo "Key : ".$key." | Value : ".$value."\n";
}
?>