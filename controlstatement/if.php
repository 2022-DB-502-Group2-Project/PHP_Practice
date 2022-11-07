<?php
    $num_01 = 10;
    $num_02 = 20;
    //if
    if($num_01 == $num_02){
        echo "{$num_01}and {$num_02} is same value";
    }

    if($num_01 < $num_02){
        echo "{$num_01} is lower than {$num_02}";
    }

    if($num_01 > $num_02){
        echo "{$num_01} is upper than {$num_02}";
    }

    echo "\n";

    //else
    if($num_01 == $num_02){
        echo "{$num_01} and {$num_02} is same number";
    }
    else{
        if($num_01 < $num_02){
            echo "{$num_01} is lower than {$num_02}";
        }
        else{
            echo "{$num_01} is upper than {$num_02}";
        }
    }
    echo "\n";
    //else if
    if($num_01 == $num_02){
        echo "{$num_01} and {$num_02} is same number";
    }
    // elseif를 붙여 써주어야 한다는 특징이 있다.
    elseif ($num_01 < $num_02){
        echo "{$num_01} is lower than {$num_02}";
    }
    else{
        echo "{$num_01} is upper than {$num_02}";
    }

    // 삼항 연산자에 의한 조건문
    // (statement) ? if true value : if false value
    echo "\n";
    $state = $num_01 == $num_02 ? "{$num_01} and {$num_02} is same number" : "Not same";
    echo $state
?>