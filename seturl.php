
<?php
$currentPath = $_SERVER['PHP_SELF']; 
   echo "string";  echo $currentPath;
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 
    
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    
    // return: http://localhost/myproject/
    return $protocol.$hostName.$pathInfo['dirname']."/";
    ?>