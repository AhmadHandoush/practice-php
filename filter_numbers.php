<?php 
function filter_numbers($num){
    $arr=[];
    for($i=0;$i<strlen($num);$i++){
        if(is_numeric($num[$i])){
            array_push($arr,$num[$i]);
        }
    }
   sort($arr);
   print_r($arr);
 }
 
filter_numbers("2ae4t3opi8pop2po9");
?>