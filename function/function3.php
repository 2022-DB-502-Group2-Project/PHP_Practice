<?php

// 조건적인 함수(Conditional Function)
// 조건적인 함수는 특정 조건을 만족할 때만 선언되는 함수이다.

$makefunction = TRUE;
var_dump($makefunction);

if($makefunction){
    function condition(){
        echo "This function is now available";
    }
}

// 위 if문에서 condition()이라는 함수가 선언되었다
condition();
echo "\n";

// 재귀함수

function factorial($num){
    if($num > 1){
        return $num * factorial($num - 1);
    }
    else{
        return 1;
    }
}

echo factorial(5);

?>