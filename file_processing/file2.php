<?php

// 파일 쓰기
/**
 * fopen()함수를 이용하여 파일을 열 수 있었다
 * php에서 데이터를 쓸 경우에는 fwrite()함수나 fputs()함수를 사영하면 된다.
 * 
 */

 $fp = fopen("list1_.txt",'a+');

 $name = "Andrew";
 $gender = "Male";
 $email = "jhoplin7259@gmail.com";

 $str = $name." ".$gender." ".$email."\n";
 // fwrite()함수에는 파일에 저장할 데이터가 저장된 문자열을 인수로 전달합니다.
 fwrite($fp,$str)
?>