<?php session_start();
$_SESSION = array();
if (isset($_COOKIES[session_name()]) == true) {
    setcookie(session_name(), '', time() - 42000, '/');
}
session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ろくまる農園</title>
</head>

<body>
    カートを空にしました。<br />
    

</body>

</html>