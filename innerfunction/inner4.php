<?php

//날짜, 시간과 관련된 함수
/**
 * date() : 전달받은 형식에 맞춰 날짜와 시간 정보를 문자열로 반환한다.
 * 포맷 정보는 해당 링크 참고 : http://www.tcpschool.com/php/php_builtInFunction_dateTime
 * 
 * 
 * 아래 예시에서 작성한 기본적인 포맷들에 대한 설명만 간단하게 적어놓는다
 * 
 * Y : 연도를 완전한 네자리 숫자로 표현한다
 * m : 월을 두자리 숫자로 표현한다
 * d : 날짜를 두자리 숫자로 표현한다
 * D : 요일을 세개의 문자로 표현한다
 * H : 24시간 형식으로 시간을 표현한다
 * i : 분을 두자리 숫자로 표현한다
 * s : 초를 두자리 숫자로 표현한다.
 * 
 */

echo date("Y/m/d H:i:s (D)")."\n"; // 2022/11/07 17:42:47 (Mon)

// timestamp 
/**
 * mktime() 함수는 시,분,초,월,일, 연도를 인수로 받아 전달하여 해당 날짜와 시간을 나타내는 timestamp를 반환한다. 
 * mktime()은 $hour 변수를 필수 변수로 지정하고 있다. 이외 값들은 null 값을 기본값으로 가진다
 * https://www.php.net/manual/en/function.mktime
 * 
 * time() 함수는 인수를 전달받지 않고 현재 날짜와 시간에 대한 타임 스탬프를 반환합니다. (mktime()을 인자 없이 하는 것과 동일한 효과이다.)
 * 
 */

 echo mktime(0,0,0,1,1,2000)."\n";
 echo time()."\n";

/**
 * getdate() : 인수로 전달받은 타임스탬프에 해당하는 정보를 "연관 배열" 형태로 반환한다.
 * 만약 인수를 전달받지 않는다면 현재 날짜와 시간에 대한 타임스탬프를 반환한다.
 * 
 * getdate()가 반환하는 연관 배열의 key value는 아래와 같다
 * 
 * seconds : 초를 의미
 * minutes : 분을 숫자로 저장
 * hours : 시간을 숫자로 저장
 * mday : 해당하는 일을 숫자로 저장
 * wday : 해당하는 요일을 숫자로 저장
 * mon : 해당하는 월을 숫자로 저장
 * year : 해당하는 연도를 숫자로 저장
 * yday : 해당하는 일자가 일년중 몇번째 날인지를 숫자로 저장함
 * weekday : 해당하는 요일을 완전한 문자열로 저장함
 * month : 해당하는 월을 완전한 문자열로 저장함
 * 0 : 타임스탬프값을 저장함
 */

 $timestamparr = getdate();

 foreach($timestamparr as $key => $value){
    echo "Key : ".$key." | Value : ".$value."\n";
 }

 // timezone 관련 함수

/**
 * date_default_timezone_set() : 해당 스크립트에 사용되는 날짜와 시간에 관련된 모든 함수에서 사용될 타임존을 설정한다
 * 
 * date_default_timezone_get() : 현재 설정되어있는 타임존을 반환한다.
 * 
 * https://www.php.net/manual/en/function.date-default-timezone-set.php
 * 
 * 지원되는 timezone list : https://www.php.net/manual/en/timezones.php
 * 
 * 한국같은 경우에는 "Asia/Seoul"로 지정해주면 된다.
 * 
 */

echo date_default_timezone_get()."\n";
date_default_timezone_set("Asia/Seoul")."\n";
echo date_default_timezone_get()."\n";
echo date("Y/m/d H:i:s (D)")."\n";

?>