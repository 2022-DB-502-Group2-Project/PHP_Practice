<?php

// 기타 파일 관련 함수들

// file_exists() : 전달받은 파일이나 디렉토리가 존재하는지 검사한다.

echo __DIR__."\n";

// 파일이 존재하는지에 대한 여부 검사
var_dump(file_exists(__DIR__."/list.txt"));

// 디렉토리가 존재하는지에 대한 여부 검사
var_dump(file_exists(__DIR__."/test_directory"));

if(file_exists("list.txt")){
    echo "File Exist\n";
}else{
    echo "File not exist\n";
}


// filesize() : 전달받은 파일의 크기를 바이트 값으로 반환한다.

echo filesize("list.txt");

// unlink() : 전달받은 주소에 위치한 파일을 삭제한다
fclose(fopen("deletetextfile.txt","w"));

unlink(__DIR__."/deletetextfile.txt");

// sleep(second) : 코드 지연, 초단위
// usleep(microsecond) : 코드 지연, 밀리초단위

// 1초 지연
sleep(1);

?>