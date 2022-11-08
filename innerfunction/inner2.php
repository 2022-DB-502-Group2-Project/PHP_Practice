<?php

// 배열과 관련된 함수

/**
 * 배열의 요소와 개수
 * 
 * count(), sizeof()함수는 배열에 저장된 배열 요소의 개수를 반환한다.
 * array_count_values() 함수는 전달받은 배열의 배열요소값을 모두 확인하여 해당 값이 총 몇번 등장하는지 확인한다 (python collection counter와 비슷한 역할)
 * 
 */

 $arr = array(1,5,7,3,3,1,2);

 echo "count of array element is ".count($arr)."\n";
 $acv = array_count_values($arr);
 var_dump($acv);

/**
 * 배열의 탐색 : 제네레이터 문법과 동일한 역할을 하는듯 하다(yield, iterator)
 * 
 * php 배열에는 현재 선택된 배열 요소가 어느 요소인지를 가리키는 포인터가 별도로 존재하며, 이를 배열 표인터라고 한다.
 * 기본적으로 배열이 생성되면 첫번째 요소를 가리킨다.
 * current(), pos() 함수는 배열 포인터가 현재 가리키고 있는 요소를 반환한다
 * next() 함수는 배열 포인터를 앞으로 하나 이동시킨뒤 해당 요소를 반환한다.
 * prev()함수는 next()와 반대로 배열 포인터를 뒤로 하나 이동시키고, 해당 요소를 반환한다.
 * 
 * each() 함수는 php 8.0부터 사용하지 못한다 대신 foreach($arr as $element) 로 대체
 * reset() 함수는 배열 포인터가 첫번째 요소를 가리키도록 한 뒤 해당 요소의 값을 반환한다.
 * end() 함수는 배열 포인터가 마지막 요소를 가리키도록 한 뒤 해당 요소의 값을 반환한다.
 * 
 * 
 * end() + prev()
 * 
 * reset() + next()
 */

 $arr = array(2,3,7,4,6);

 $element = current($arr);
 while($element){ // 맨 마지막 요소를 가게 되면 null 값을 가리키게 되므로
    echo "Before next() : ".$element;
    $element = next($arr);
    echo " | After next() : ".$element."\n";
 }

 // 아무 값도 가리키지 않는것을 볼 수 있다
 echo "Current of \$arr : ".current($arr);

 // 배열의 마지막 요소를 가리킨다.
 $element = end($arr);
 while($element){ //첫번째 요소로 가면서 포인터가 아무것도 안가리키면 끝나게 된다.
    echo "Before next() : ".$element;
    $element = prev($arr);
    echo " | After next() : ".$element."\n";
 }

/**
 * 배열의 정렬
 * 
 * sort() 함수는 배열 요소들을 기준에 맞게끔 정렬한다 반환값은 성공 여부 true / false 이다.
 * 
 * sort() 함수의 두번째 인수로는 배열의 요소를 정렬할 기준을 정한다
 * - SORT_NUMERIC : 배열을 숫자로 비교한다
 * - SORT_STRING : 배열을 문자열로 비교한다
 *   - sort()는 대소문자를 구분하며, 대문자가 소문자보다 앞쪽에 정렬된다.
 *   - sort()는 원본 배열에 영향을 준다.
 * 
 */

 $arr1 = array(3,2,7,6,4);
 var_dump($arr1);
 sort($arr1);
 var_dump($arr1);

 //  두번째 인수에 정렬 기준을 전달하여 정렬해보기

 $arr2 = array(15,2,1,21,121);

 sort($arr2,SORT_NUMERIC); // 정수값 정렬
 var_dump($arr2);
 $arr4 = sort($arr2,SORT_STRING); // 문자 기준 정렬
 var_dump($arr2);

 // 연관배열의 정렬
 // 연관배열은 인덱스를 숫자가 아닌 문자열로 사용한다. 그렇기에 키, 요소값을 따로 정렬할 수있다.
 // asort() : 요소의 value를 기준으로 정렬
 // ksort() : 요소의 key를 기준으로 정렬
 // 위 두 함수는 원본 배열에 영향을 주지 않는다.

 $arr3 = array(
    "apple" => 1000,
    "banana" => 2000,
    "orange" => 1500,
    "pear" => 1300
 );

 asort($arr3); // sort with value
 var_dump($arr3);
 ksort($arr3); // sort with key
 var_dump($arr3);

 // 배열 역순으로
 // array_reverse() 함수는 전달받은 배열의 순서를 역순으로 변경한 새로운 배열을 반환한다
 // 원본 배열에 영향을 주지 않는다.

 $arr5 = array(1,2,3,4,5);
 $arr5_reverse = array_reverse($arr5);
 var_dump($arr5_reverse)

?>