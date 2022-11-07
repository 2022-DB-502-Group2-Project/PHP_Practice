<?php

// passing by value
// 인수를 함수에 전달하면 새롭게 생성된 매개변수에 전달 받은 값이 복사되어 저장된다.
// 매개변수에 저장된 값은 데이터의 복사본으로 원본 데이터에 영향을 주지 않는다
// 그게 설령 배열이라도 call by reference가 되지 않는다.

function test($exarr){
    $exarr["a"] = 40;
}

$arr["b"] = 50;
test($arr);
var_dump($arr);

// passing by reference
// 함수 내부에서 함수 밖의 데이터를 조작하기 위해서는 해당 변수를 전역 변수로 선언할 수 있다.
// 하지만 참조 전달을 사용하면 유연한 코드를 작성할 수 있다.
// 참조 전달은 원본 데이터의 복사된 값을 가지는 것이 아니라 원본 데이터를 그대로 참고하게 된다
// 참조 전달을 사용하기 위해서는 매개변수 앞에 "&" 기호를 붙인다

function increment(&$numeric){
    $numeric++;
}

$value = 10;
echo "Before increment : ".$value."\n";
increment($value);
echo "After increment : ".$value."\n";

function addElement(&$array){
    $array["ip"] = 19019019;
}

addElement($arr);
var_dump($arr);

// 기본값 (Default Parameter)
// 명시된 매개변수를 전달하지 않았을때 사용하게될 기본값을 의미한다.
// 매개변수에 대입연산자를 통해서 설정해 줄 수 있으며
// 웬만하면 기본값이 요구되는 매개변수는 기본값이 없는 매개변수 다음에 정의해주는것이 좋다.

function sum($value1,$value2 = 1,$value3 = 2){
    return $value1 + $value2 + $value3;
}

echo sum(10,20,30)."\n";
echo sum(10,20)."\n";
echo sum(10)."\n";

// 가변 길이 인수 목록
// 인수 개수를 미리 정하지 않고 호출할때마다 유동적으로 인수를 넘기는 기능이다.
// php 5.6 이상에서는 '...' 토큰을 사용하여 간편하게 설정할 수 있다.

function sum1(...$num){
    $total = 0;
    foreach($num as $n){
        $total += $n;
    }
    return $total;
}

echo sum1(10,20, 30, 40,50,60);

?>