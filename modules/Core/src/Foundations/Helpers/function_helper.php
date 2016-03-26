<?php

function get_real_ip(){
$ip=false;
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
$ip = $_SERVER["HTTP_CLIENT_IP"];
}
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
$ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
for ($i = 0; $i < count($ips); $i++) {
if (!eregi ("^(10|172\.16|192\.168)\.", $ips[$i])) {
$ip = $ips[$i];
break;
}
}
}
return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}

function is_mobile($mobile_number)
{
    if(preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/",$mobile_number)){    
        return true; 
             
    }else{    
        return false;
    }    
}

function is_email($email)
{
    if (ereg("/^[a-z]([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?$/i; ",$email)){
        return true;
    }else{
        return false;
    }     
}

function is_user_name($user) 
 { 
  if (preg_match("/^[a-za-z]{1}([a-za-z0-9]|[._]){3,19}$/",$user,$username)) 
  { 
      return true; 
  } 
  else
  { 
      return false; 
  } 
}

function login_hash($userId,$userName,$password)
{
    return true;
}