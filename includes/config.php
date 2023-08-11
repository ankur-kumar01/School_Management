<?php

$db_conn = mysqli_connect('localhost', 'root', '', 'sms');

    if (!$db_conn) {
    echo 'Connection Failed';
    exit;
    }

include('functions.php');
?>