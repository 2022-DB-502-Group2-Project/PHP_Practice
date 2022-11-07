<?php
error_reporting(E_ERROR | E_PARSE);
// 상수: 변수와 마찬가지로 데이터를 저장하지만, 데이터를 변경 및 해제가 불가능하다
// define()함수를 이용하여 상수 선언
// param1 : name param2 : value param3 : 대소문자 구분 안할것인지에 대한 여부

define("op","example constant\n",true);// 대소문자를 구분하지 않음ㄴ

echo op,"\n";

// PHP magic constant(Python magic method와 동일한 역할)
echo __LINE__,"\n"; // 파일의 현재 줄을 출력
echo __FILE__,"\n"; // 파일 전체 경로와 이름을 반환한다
echo __DIR__,"\n"; //파일의 디렉토리를 반환한다 dirname(__FILE__)과 동일한 결과를 반환한다
echo __FUNCTION__,"\n"; // 함수 이름을 반환한다
echo __CLASS__,"\n"; // 클래스 이름을 반환한다
echo __METHOD__,"\n"; // 클래스 메소드 이름을 반환한다
echo __NAMESPACE__,"\n"; // 현재 네임스페이스의 이름을 반환한다.

// php 기본 타입
/**
 * boolean
 * integer
 * float
 * string
 * array
 * object
 * resource
 * NULL
 * 
 */

 // array : php에서 array는 key : value로 이루어진 맵으로 구성된 순서가 있는 집합을 의미한다,

 $exarr = array(
    1 => "first value",
    "2" => "second value",
    10 => "third value"
 );

 var_dump($exarr);
 echo $exarr[1],"\n";
 echo $exarr["2"],"\n";
 echo $arr[10],"\n";

 // object : 클래스의 인스턴스를 저장하기 위한 타입이다. 프로퍼티와 메소드를 포함할 수 있다
 class Lecture{
   function Lecture(){
      $this->lec1 = "PHP";
      $this->lec2 = "MySQL";
   }
 }
 
 $var33 = new Lecture; // create object
 $var33->Lecture();
 echo $var33->lec1,"\n";
 echo $var33->lec2,"\n";

 // PHP 타입 변환
 // PHP에서는 변수에 값을 대입할 때 변수의 타입이 그것에 맞게 변하게 된다.
 // 하지만 사용자가 직접 데이터의 타입을 변환해야하는경우도 있다.
 // 강제 타입캐스변환을 타입 캐스트 연산자인 괄호(())를 사용하여 수행할 수 있다.
 //변환시키고자 하는 데이터나 변수의 앞에 괄호를 붙이고, 그 괄호 앞에 변환할 타입을 적으면 된다

 /**
  * int(10)
  * bool(true)
  */
 $var_01 = 10;
 var_dump($var_01);
 $var_02 = (boolean)$var_01;
 var_dump($var_02);

/**
 * int(0)
 * string(1) "0"
 */

 $var_03 = 0;
 var_dump($var_03);
 $var_04 = (string)$var_03;
 var_dump($var_04);
?>