<?php

// switch - case
function switchtest($var){
    switch($var){
        case "a":
            echo "a";
            break;
        case "b":
            echo "b";
            break;
        case "c": // if break not defined
            echo "c";
        case "d":
            echo "d";
            break;
        default:
            echo "Nothing matched";
            break;
    }
    echo "\n";
}

switchtest("a");
switchtest("b");
switchtest("c");
switchtest("z");
?>