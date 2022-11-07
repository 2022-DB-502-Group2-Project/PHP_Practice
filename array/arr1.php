<?php
//배열 요소의 참조
// 배열은 index로 참조, 동일하게 0부터 인덱스 시작한다.
// array()함수를 이용해서 배열 생성

$arr = array("a","b","c","d","e");

// 인덱스를 통해서 배열을 집어넣는 방법
$arr2 = array();
$arr2[0] = "hi";
$arr2[2] = "php";
var_dump($arr2);

// 만약 해당 배열이 존재하지 않으면 해당 이름으로 새로운 배열 생성 후 요소 추가한다
// 배열 요소의 인덱스를 생략한 후 배열에 값을 넣을 수 도 있다. 그러면 순서대로 저장이 된다.

// arr3 선언 안했지만 생성 후 순서대로 넣어짐
$arr3[] = "arr";
$arr3[] = "example";
$arr3[] = "index";
var_dump($arr3);

// array hole : php는 특정 배열 인덱스에만 배열 요소를 추가해줄 수 있다.

$arr = array();
$arr[11] = "index 11";
var_dump($arr);
var_dump($arr[0]); // NULL
/**
 * isset() : 전달받은 변수가 초기화 되어있는지를 확인해준다.
 * 
 */
var_dump(isset($arr[0])); // bool(false)
var_dump(isset($arr[11])); // bool(true)

// Loop를 이용한 배열로의 접근
// count() 함수는 모든 요소의 개수를 반환하는 함수이다.
// count()는 기본적으로 array hole을 포함하지 않는다.
$arr = array("apple","banana","orange");
for($i = 0; $i < count($arr);$i++){
    echo $arr[$i]."\n";
}

// array hole이 있는 경우에는 for문을 사용해서 모든 배열요소에 접근할 수 없다.
// array hole이 있는 경우에는 foreach문을 사용하면, 더 간편하게 접근할 수 있다.

$arr2 = array();
$arr2[2] = "apple";
$arr2[3] = "banana";
$arr2[4] = "orange";

// 총 3개의 원소가 있는 것으로 반환
// 하지만 0,1 은 공백이므로, index 2까지만 순회를 하게 된다
for($i = 0; $i < count($arr2); $i++){
    echo $arr2[$i]."\n";
}

foreach($arr2 as $element){
    echo $element."\n";
}
?>