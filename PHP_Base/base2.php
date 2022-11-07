<?php 
error_reporting(E_ERROR | E_PARSE);

function printvariableinfo($var){
    // var_dump() : 변수의 정보를 출력해주는 내장 함수이다. return void, print inside of function
    // gettype() : 변수의 타입을 출려갷주는 내장 함수이다. return string
    var_dump($var);
    echo gettype($var),"\n";
}

// variable

$intvar = 10;
$floatvar = 3.14;
$strvar = "string";

echo "$intvar\n";
echo "{$floatvar}\n";
echo "data saves in variable \$strvar is : {$strvar}\n\n\n\n";

/**
 * Base values by type
 * 
 * Boolean : False
 * Integer : 0
 * Float : 0.0
 * String : ""(empty string)
 * Array : empty array
 * 
 */

var_dump($varex);
$exint += 10;
printvariableinfo($exint);
$exstr .= "hello world";
printvariableinfo($exstr);
$exfloat += 3.90;
printvariableinfo($exfloat);
$exarr[1] = "index 1 element";
printvariableinfo($exarr);

?>