<?php
    require_once('conn.php');

    if(empty($_GET['id']))
    {
        die('Please enter name');
    }

    $id = $_GET['id'];
    $sql = sprintf(
        'delete from house_info where id = %d', $id
    );

    $result = $conn->query($sql);

    if(!$result)
    {
        die($conn->error);
    }

    header('Location: index.php');

?>