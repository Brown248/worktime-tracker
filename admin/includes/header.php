<?php

if (session_status() == PHP_SESSION_NONE) session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = 'bin2hex(random(32))';}

$csrf_token = $_SESSION['csrf_token'];

?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - ระบบบันทึกเวลา</title>
    
</head>
<body>
    
</body>
</html>












