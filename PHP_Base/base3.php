<?php
error_reporting(E_ERROR | E_PARSE);
// local variable, global variable

$exglobalvar = "hello";
// global variable
$var = 20;
function varFunc(){
    // local variable
    $var = 10;
    echo "Call variable in function '{$var}'\n";
    // 함수 외부에 서넌된 변수를 함수 내부에서 접근하고자 할 때는 global 키워드를 사용한다
    // 사용할 전역변수를 global 키워드로 명시하고 나서 다시 호출한 echo 함수는 정확한 전역 변수의 값을 출력한다.
    // PHP는 모든 전역 변수를 $GLOBALS 배열에 저장한다
    // 해당 전역변수의 값에 접근할 수 있다.
    // 함수 내부에서도 접근할 수 있다.
    global $var;
    echo "Call variable in out of function '{$var}'\n";
    echo $GLOBALS['exglobalvar'];
}

varFunc();
/**
 * PHP에서 제공하는 super global 목록
 * 
 * $GLOBALS
 * $_SERVER
 * $_GET
 * $_POST
 * $_FILES
 * $_COOKIE
 * $_SESSION
 * $_REQUEST
 * $_ENV
 * 
 */

function statictest(){
    // static variable(정적변수) : 함수 호출이 종료되도 메모리상에 사라지지 않음
    // 변수명 앞에 static 키워드를 붙인다
    static $count = 0;
    $count++;
    echo "Function call counter : {$count}\n";
}

statictest();
statictest();
statictest();
?>