<?php
    $server_name = 'loacallost';
    $username = 'jennifer';
    $password = 'jennifer';
    $db_name = 'house';

    $conn = new mysqli($server_name, $username, $password, $db_name);

    if($conn -> connect_error)
    {
        dir('ERROR'.$conn->connect_error);
    }

    $conn->query('SET NAMES UTF8');
    $conn->query('SET time_zone = "+8:00"');
?>