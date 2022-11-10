<?php 
declare(strict_types=1);
function check(...$chekers){
    foreach($chekers as $cheker){
        if(is_integer($cheker)){
            echo "$cheker  is an integer<br>";
        }
        else{
            echo "$cheker is probably string<br>";
        }
    }
}
$str1 = 1;
$str2 = "008";
$str3 = "00007-STR";
check($str1,$str2,$str3);