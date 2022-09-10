<?php
    require_once('conn.php');
    if(empty($_POST['name']))
    {
        die('Please enter name');
    }
    if(empty($_POST['addr']))
    {
        die('Please enter address');
    }
    if(empty($_POST['picture']))
    {
        die('Please enter picture');
    }
    if(empty($_POST['phone']))
    {
        die('Please enter phone');
    }

    $name = $_POST['name'];
    $addr = $_POST['addr'];
    $picture = $_POST['addr'];
    $phone = $_POST['phone'];
    $sql = sprintf(
        'insert into house_info(name, addr, picture, phone) values("%s", "%s", "%s", "%s")', $name, $addr, $picture, $phone
    );
    $result = $conn->query($sql);

    if(!$result)
    {
        die($conn->error);
    }

    header('Location: index.php');
?>