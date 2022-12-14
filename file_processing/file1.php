<?php

/**
 * 파일 처리과정
 * 
 * <파일 읽기>
 * 1. 파일 열기, 열리지 않으면 종료함
 * 2. 파일에서 데이터 읽기
 * 3. 파일 닫기
 * 
 * <파일 쓰기>
 * 1. 파일 열기, 파일이 존재하지 않으면 생성함
 * 2. 파일에 데이터 쓰기
 * 3. 파일 닫기
 * 
 */

// 파일 열기
/**
 * fopen() 함수를 이용해서 열 수 있다
 * 첫번쨰 인수로 열어볼 파일의 주소를 전달한다
 * fopen() 두번째 인수로는 팡리에 대한 접근 권한을 명시하는
 * 파일 모드를 전달해야한다
 * 
 * r : 읽기 전용 파일 포인터가 시작 부분에 위치
 * r+ : 읽기, 쓰기 전용 파일 포인터가 시작 부분에 위치
 * w : 쓰기 전용 파일이 존재하면, 덮어쓰고, 없다면 생성 파일 포인터가 시작 부분에 위치
 * w+ : 읽기, 쓰기 전용 파일 포인터가 시작 부분에 위치
 * a : 파일을 쓰기 전용으로 열고, 파일이 존재하면 이어쓰고, 없다면 생성 파일 포인터가 끝부분에 위치
 * a+ : 파일을 읽기, 쓰기 전용으로 열고, 파일이 존재하면 이어쓰고, 없으면 새로 생성 파일 포인터가 끝부분에 위치
 */

// 파일 포인터를 뒤로 보내고, 읽고 쓰기 전용으로 열며 파일이 존재하면 이어쓰고 없으면 새로 생성한다.
// 파일 포인터를 반환하여 $fp 에 대입한다. 
$fp = fopen("list.txt",'a+');

// 파일 닫기 : fclose() 사용

// 파일 읽기
/**
 * php에는 파일 읽기를 위한 여러 함수를 제공한다
 * 
 * 1. fgets() : 해당파일에서 데이터를 한줄씩 읽어온다. 파일 포인터가 파일 끝에 도달하거나, 줄바꿈 문자를 만날때까지 계속 수행한다
 * 2. fgetc() : 파일에서 데이터를 한번에 한글자식 읽어 들어온다
 * 3. readfile() : 해당 파일에서 데이터르 한번에 모두 읽어들인다.
 */

 // feof() : 전달받은 포인터가 파일의 끝에 도달하면 true를 반환한다
 // EOF -> End Of File

while(!feof($fp)){
    $member = fgets($fp);
    echo $member."<br>";
}
fclose($fp);
// fgetc() 함수로 fgets()구현
$fp = fopen("list.txt","a+");
echo "\n\n";
while(!feof($fp)){
    // 한글자씩 출력한다.
    $char = fgetc($fp);
    
    // 만약 줄바꿈인 경우
    if($char == "\n"){
        $char="<br>";
    }

    if(!feof($fp)){
        echo $char;
    }
}
fclose($fp);
echo "\n\n";
echo readfile("list.txt");

?>