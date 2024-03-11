
<?php 

function validateIPv4($ip) {
    
     if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false){
        echo $ip . " ip is valid";
     }else{
        echo $ip . " ip is not valid ";
     } ;
}
 validateIPv4("192.168.0.1");
?>