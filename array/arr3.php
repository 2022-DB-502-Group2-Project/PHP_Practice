<?php
// 연관 배열(Associative Array)
// PHP는 숫자 뿐만 아니라 문자열도 배열 요소의 인덱스로 사용할 수 있다.
// 만약 정수와 문자열 이와 다른 타입의 값을 키값으로 사용하면, 내부적으로 정수와 문자열로 타입 변환이 이루어 진다


// 어떻게 보면 파이썬 딕셔너리로 생각할 수 있을것같다.
$arr = array();

$arr["apple"] = 1000;
$arr["banana"] = 2000;
$arr["orange"] = 1500;

var_dump($arr);

// 연관배열을 array()함수로 초기화하는것을 살펴보자
// key => value 형태로 원소를 넣어줄 수 있다.

$arr2 = array(
    "galaxy" => 1000,
    "iphone" => 2000,
    "lg" => 3000
);

var_dump($arr2);

// 연관 배열에 요소를 추가할 수 도 있다

$arr2["pixel"] = 4000;

// 기본적으로 연관배열은 index로 순회가 불가능하다. 그렇기 때문에 foreach문을 사용해서 키값과 요소의 값을 저장하여 루프를 사용할 수 있다
foreach($arr2 as $key => $value){
    echo "Key : ".$key." | Value : ".$value."\n";
}
// 다른 방법으로는 each()함수를 사용하는 것이다 each()함수는 배열 커서가 가리키고 있는 배열 요소를 반환하고
// 다음 배열 요소를 가리키도록 한다. 만약 다음 요소가 마지막 요소라면 더이상 동작하지 않는다.
// python, javascript 제네레이터, 이터레이터와 비슷한 원리로 생각

// while($element = each($arr2)){
//     echo $element."\n";
// }

// Deprecated : 해당 내용은 PHP 8.0 부터 사용 불가능하다.

?>