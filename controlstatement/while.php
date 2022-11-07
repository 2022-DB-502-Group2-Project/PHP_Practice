<?php

// while(statement){logic}

$i = 0;

while($i < 10){
    // '.' operator : 접합연산자로, 변수간 '+'하는것과 동일한 효과이다.
    echo "Operator ".$i." test ";
    echo $i++."\n";
}
?>