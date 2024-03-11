<?php
function evaluate($s){
    $arr=explode(" ",$s);

    $one=(float)$arr[0];
    $two=$arr[1];
    $three=(float)$arr[2];
    $total;
    
    
 switch($two){

    case '+':
             $total=$one + $three;
             break;
    case '-':
            $total = $one - $three;
            break;
    case '*':
            $total= $one * $three;
            break;
    case '/':
            if($three==0){
                echo "you can't devide by 0";
                
                }else{

                    $total= $one / $three;
                }
             break;
    default:
            echo "there is an error";
                    
                }
   echo $total;

}
evaluate("10 / 2");
 ?>