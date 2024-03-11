<?php 
function flip_digit($num){
    $arr=[];
    $a=strval($num);
    for($i=0;$i<strlen($a);$i++){
        array_push($arr,$a[$i]);
    }
    $re=array_reverse($arr);
    $s=implode("",$re);
    $last= (int)$s;

    echo $last;
}
flip_digit(4567);

?>