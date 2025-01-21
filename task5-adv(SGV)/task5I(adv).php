<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Example</title>
</head>
<body>
<?php
$cookie_name = "user";
$cookie_value = "GROUB ALSFAHEN";
$cookie_time = time() + (86400 * 30);
$cookie_delete_time = time() - 3600; 
setcookie($cookie_name, $cookie_value, $cookie_time, "/");
if(!empty($_COOKIE[$cookie_name])){
echo "Cookie still exists: " . $_COOKIE[$cookie_name];
setcookie($cookie_name, "", $cookie_delete_time, "/");
}
else{
    echo "No cookie";
}

?>
</body>
</html>
