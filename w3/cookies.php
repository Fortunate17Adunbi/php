<?php
#   cookies
// cookies can be used to identify user
// it is ussually a small file the server embeds on the user machine. and each time the  same computer request a page with a browser it also send the cookie
// cookie seve as protocol restriction as they have to be sent before any output from the  script 
// creating cookie
//setcookie(
    // parameters
    #   (string) $name,
    #   (string) $value = "",
    #   (int) $expires_or_options = 0,
    #   (string) $path = "",
    #   (string) $domain = "",
    #   (bool) $secure = false,
    #   (bool) $httponly = false
//);
#   $value
// this stores the value of the cookie
// so we cann access the value by calling the cookie name
// the value is stored on th user computer and do not contain sensitive information
// e.g if the cookie name is 'cookiename' the value can be accessed by $_COOKIE['cookiename'];
#   $expires_or_options
// this sets the time the cookie will expire.it is in seconds
// we can do this by adding the seconds to the result of time()(this returns current time)
// time() + 60*60*24*30 : this multiply 60 secs by 60 mins to arrive at on hour and by 24hrs to arrive at 1 day and by 30 to arrive at 30 days. so this cookie set with this time expire in thirty days
#   path
// this specifies the path in which the cookie will be available on the server
// if it is set to '/' it will be available throughout the entire domain
// if set to '/foo/' it will only be available in this domain and its sub-directory such as '/foo/bar/'
#   domain
// this is the domain or sub-domain the cookie is avaible to
// setting it to a subdomain like www.php.com(website does not exist) will make cookie available only to this sub-domains and its sub-domains like w2.www.php.com
// to make it available to the whole domain and its sub-domain we do something like this php.com
$cookie_name = "user";
$cookie_value = "Something somewhere";
// this cookie expires in 30 days
setcookie($cookie_name, $cookie_value, time() + (60 * 60 * 24 *30));
// this cookie cookie expiration is 1 hour ago
// this is used to delete a cookie by setting its expiration to the past
setcookie($cookie_name, $cookie_value, time() - (60 * 60));
setcookie($cookie_name, $cookie_value, time() + (60 * 60 * 24 *30), "/w3/", "w3schools.test");
setcookie($cookie_name, $cookie_value, time() + (60 * 60 * 24 *30), "/", "w3schools.test");
print_r($_COOKIE);
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '$cookie_name' is set";
    echo "<br>";
    echo "Its value is: '$_COOKIE[$cookie_name]'";
    echo "<br>";
}
else {
    echo "Cookie named $cookie_name is not set";
    echo "<br>";
}
#   check if cookie is enabled
if (count($_COOKIE) > 0) {
    echo "Cookies are enabled";
    echo "<br>";
}
else {
    echo "Cookies are disabled";
    echo "<br>";
}

echo "<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>";



