<?php

// 변수와 관련된 내장함수

/**
 * gettype()함수는 전달받은 변수의 타입을 반환한다
 * 변수를 전달하면, 타입에 따라 해당 타입의 이름을 문자열로 반환한다
 * 단 float인 경우 double을 반환하고, 만약 표준 원시 타입이 아닌 경우에는 unknown type을 반환한다
 * 
 */

 $x = 10;
 echo gettype($x)."\n";

 /**
  * settype()함수를 사용하면 전달받은 변수의 타입을 변경할 수 있다.
  * 이때 변환할 타입으로는 boolean, integer, string, array, object,float,null를 사용할 수 있다
  * settype() 함수는 전달받은 변수의 타입을 성공적으로 변경하면 true를 반환하고 그러지 못하면 false를 반환한다.
  */

settype($x,"string");
echo gettype($x)."\n";

/**
 * gettype()함수는 내부적으로 문자열을 비교한다. 그렇기 때문에 실행 속도가 느리다
 * 변수가 어떤 타입인지 검사하기 위해서는 아래 함수들을 사용하는것이 좋다
 * 
 * is_array() : 배열인지 확인
 * is_bool() : boolean 인지 확인
 * is_callable() : 함수처럼 호출할 수 있는지 확인
 * is_float() / is_double() / is_real() : 실수인지 확인
 * is_int() / is_integer() / is_long() : 정수인지 확인
 * 
 * is_null() : NULL인지 확인
 * is_numeric() : 전달받은 변수나 수가 숫자로 이루어진 문자열인지 확인
 * is_object() : 객체타입인지 확인
 * is_string() : 문자열 타입인지 확인
 * 
 * 
 */

 $varint = 10;
 $varstr = "hello world";
 $varfloat = 10.90;
 $varbool = TRUE;

var_dump(is_int($varint));
var_dump(is_string($varstr));
var_dump(is_float($varfloat));
var_dump(is_bool($varbool));
var_dump(is_callable($varint));

/**
 * isset() : 전달받은 변수가 선언되어있는지 확인한다(null값인지 아닌지에 대한 것이다.)
 * 선언되어있으면 true, 아니면 false를 반환한다
 * 
 * unset() : 전달받은 변수를 제거한다
 * 
 * empty() : 전달받은 변수가 비어있는지 검사한다. 전달 받은 변수가 존재하고, 비어있지 않으면 false반환한다.
 * 
 */
echo "----------------\n";
$var10;
var_dump(isset($var10));
var_dump(empty($var10));

$var11 = 11;
var_dump(isset($var11));
var_dump(empty($var11));

// var11변수를 제거한다
unset($var11);
var_dump(isset($var11));
var_dump(empty($var11));

?>