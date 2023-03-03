<?php
#   php filter
// validating data = determing if data is in proper form
// sanitizing data = removing illegal character from data
// the php filter is used to validate and sanitize input

// this list all the supported filter extension
print_r(filter_list());
echo "<br>";

// filter_var() : it is used to both validate and sanitize the data
#   sanitize string
// removes unnecessary tags from the string
$str = "<h1>Hello World!</h1>";
echo $str."<br>";
// this is deprecated as of php 8.1.0
// $newStr = filter_var($str, FILTER_SANITIZE_STRING);
// echo $newStr."<br>";
// so instead we do this
$new = htmlspecialchars($str);
echo $new;
echo "<br>";
#   validating integer
$int = 0;
$int2 = "435"; // this is an int (integer string)
$int3 = "hello";
// if it confirms it is an int it should return true.
// this means if it is not false(i.e true) it is an int
// try other $int value
// using this block of code will print invalid when we input 0
// if (!filter_var($int, FILTER_VALIDATE_INT) === FALSE) {
//     echo "valid<br>";
// }
// else {
//     echo "invalid<br>";
// }
// so to fix that we do
if (filter_var($int, FILTER_VALIDATE_INT) === 0 or filter_var($int, FILTER_VALIDATE_INT)) {
    echo "Valid integer<br>";
}
else {
    echo "Invalid integer<br>";
}

#   validate ip address
$ip = "127.0.0.1";
// $ip = "192.168.0.1"; : my mifi ip address
if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo "$ip is a valid IP address<br>";
}
else {
    echo "$ip is an invalid IP address<br>";
}

#   validate and sanitize email address
$email = "samuelfortunate098@/gmail.com /";
// remove unnecessary characters
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// validate email to ensure it is in the right format
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email is a valid email address<br>";
}
else {
    echo "$email is an invalid email address<br>";
}

#   validate and sanitize URL 
$url = "https://www.learning_php.com";
// to remove unnecessary characters
$url = filter_var($url, FILTER_SANITIZE_URL);
// validate to ensure it is in the right format
if (filter_var(FILTER_VALIDATE_URL)) {
    echo "$url is a valid URL<br>";
} 
else {
    echo "$url is an invalid URL<br>";
}