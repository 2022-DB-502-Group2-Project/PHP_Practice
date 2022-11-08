<?php

// 문자열과 관련된 함수
//strlen() 함수는 전달받은 문자열 길이를 반환한다. 단 한글이 포함된 문자열이 들어가면 총 바이트 수를 반환한다
// 한글이 포함된 문자열의 정확한 문자열 길이를 반환받기 위해서는 mb_strlen()을 사용해야한다


// utf-8 인코딩 방식
// 영어 -> 1바이트
// 한글 -> 3바이트

// mb_strlen()을 사용할때도 주의해야할 점은 두번째 인자로 인코딩 방식을 지정해 주지 않으면, 시스템 인코딩 방식을 사용한다
// 만약 시스템 인코딩 방식이 utf-8이면 무관하겠지만, 아닌 경우에는 따로 지정을 해주어야한다.
$str = "12345678";

echo strlen($str)."\n";

$str2 = "한글문자열";

echo strlen($str2)."\n"; // 3byte * 5 -> 15
echo mb_strlen($str2)."\n"; 
echo mb_strlen($str2,"utf-8"); // 이와 같이 인코딩 방식 지정

// 문자열 비교하기
/**
 * strcmp() 함수는 두개의 문자열을 서로 비교한다
 * 첫번째 인수의 문자열이 두번째 인수의 문자열 보다 크면 양수를 작으면 음수를 반환한다
 * 두 문자열이 완전히 같이면 0을 반환한다 -> 두 문자열이 같은지를 검사할때는 0이 나오는지만 검사하면 될듯하다
 * 
 * strcmp() 함수는 기본적으로 대소문자를 구분한다
 * 
 * strcasecmp() 함수는 대소문자를 구분하지 않고 두 문자열을 비교할 수 있다.
 * 
 */

 echo "Compare with strcmp() : ".strcmp("abc","ABC")."\n";
 echo "Compare with strcasecmp() : ".strcasecmp("abc","ABC")."\n";


// 문자열 추출하기
/**
 * substr()함수는 해당 문자열에서 1) 특정 인덱스부터 2) 전달받은 길이만큼의 일부분을 추출하여 반환한다
 * 
 * 1)
 * 전달받은 인덱스 양수 -> 해당 인덱스부터 해당 문자열 끝까지를 반환한다
 * 전달받은 인덱스 음수 -> 해당 문자열 끝부터 전달받은 음수의 절댓값만큼의 문자열을 반환한다
 * 
 * 2)
 * 전달받은 길이가 양수라면 -> 반환할 문자열의 길이를 나타낸다
 * 전달받은 길이가 음수라면 -> 특정 인덱스부터 문자열 끝부터 전달받은 음수의 절댓값까지의 문자열을 반환한다.
 * 
 */

$str3 =  "Hello world!";
echo substr($str3,3)."\n"; //index 3부터 끝까지 : lo world!
echo substr($str3,-3)."\n"; // 뒤에서 세글자 출력, -3의 절댓값 -> 3 : ld!
echo substr($str3,1,5)."\n"; // index 1 부터 다섯글자 출력 : ello
echo substr($str3,1,-5)."\n"; // 두번째 문자부터 뒤에서 여섯번쨰 문자까지 출력한다. : ello w

echo substr($str3,-4,2)."\n"; // 뒤에서 네글자 출력, 거기서부터 2개를 반환 : rl

echo substr($str3,-6,-2)."\n"; // 뒤에서 여섯글자 출력, 뒤에서 세번쨰 문자까지 출력한다 : worl

// 문자열 대소문자로 바꾸기

/**
 * strtolower() : 전달받은 문자열의 모든 문자를 소문자로 바꿉니다
 * strtoupper() : 전달받은 문자열의 모든 문자를 대문자로 바꿉니다
 */

$upper1 = "UPPER CASE";
$lower1 = "lower case";

echo strtolower($upper1)."\n";
echo strtoupper($lower1)."\n";

/**
 * ucfirst() : 전달받은 문자열의 첫번째 문자만을 대문자로 바꾼다
 * ucwords() : 전달받은 문자열에서 단어별로 첫 문자만들 대문자로 바꿔준다.
 * 
 */

$word1 = "hello world";
echo ucfirst($word1)."\n";
echo ucwords($word1)."\n";

// 문자열 합치고 나누기
/**
 * 
 * explode() : 특정 문자 기준으로 전달받은 문자열을 하나로 나누어서 하나의 배열로 반환합니다. 일반적으로 문자열 split() 함수와 동일한 역할을 한다.
 * implode() / join() : 전달받은 배열의 각 요소를 특정 문자를 사용하여 하나로 합쳐진 문자열을 반환한다.
 * 
 */

$str4 = "hello,beautiful,world!";

$splitedArray = explode(",",$str4);
foreach($splitedArray as $key => $value){
    echo $key." : ".$value."\n";
}

// use implode
$str5 = implode("!",$splitedArray);
echo $str5."\n";
// use join
$str6 = join("-",$splitedArray);
echo $str6."\n";

/**
 * strtok() : 전달받은 문자열을 특정 문자를 기준으로 토큰화한다
 * 이 함수는 문자열을 한번에 나누지 않고 하나씩만을 토큰화한다
 * 
 * 첫번째 토큰을 얻기위해서는 strtok()함수 인수로 해당 문자열과 기준이 되는 문자를 함께 전달한다
 * 그 이후에는 기준이 되는 문자만을 전달해주면 자동으로 두번째 토큰을 발급한다.
 */

 $token = strtok($str5,"!");
 echo $token."\n";
 while($token != ""){
    $token = strtok("!");
    echo $token."\n";
 }
$token = strtok($str6,"-");
echo $token."\n";
while($token != ""){
    $token = strtok("-");
    echo $token."\n";
}

/**
 * str_replace() : 해당 문자열에서 전달받은 문자열을 모두 찾은 후에 찾은 문자열을 대체 문자열로 교체한다
 */

 $str7 = "hello world";
 echo str_replace('o','*',$str7)."\n"; // $str7 변수에 대해 모든 'o' 를 '*'로 대체한다 라는 의미이다.

/**
 * ltrim() : 문자열 앞부분에 있는 공백 제거
 * rtrim() : 문자열 끝에 있는 함
 * trim() : 문자열의 처음과 끝부분에 있는 공백을 모두 제거한다.
 */

$str8 = "  hello world   ";
echo "ltrim() : |".ltrim($str8)."|\n";
echo "rtrim() : |".rtrim($str8)."|\n";
echo "trim() : |".trim($str8)."|\n";

?>