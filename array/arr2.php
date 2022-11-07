<?php
    // 다차원 배열
    // 2차원 배열 예시
    $arr = array(
        array(),
        array(),
        array()
    );

    $arr[0][0] = "apple";
    $arr[0][1] = "korea";
    $arr[0][2] = 1000;
    $arr[1][0] = "orange";
    $arr[1][1] = "usa";
    $arr[1][2] = 2000;
    $arr[2][0] = "watermelon";
    $arr[2][1] = "canada";
    $arr[2][2] = 3000;

    // for 순회와 foreach순회 혼합해서 사용해 보기
    // count()함수 사용해 보기
    for($i = 0; $i < count($arr);$i++){
        $counter = 0;
        foreach($arr[$i] as $element){
            echo "Array [".$i."][".$counter."] = ".$element."\n";
            $counter++;
        }
    }

?>