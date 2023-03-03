<?php phpinfo(); // this provides system information about php 
    // $_SERVER : this variable contain all information about the web sever
    // checking what type of browser a vistor is using
    // $_SERVER is a super global variable
    echo $_SERVER['HTTP_USER_AGENT'];
    echo getcwd(), "\n";
?> 
