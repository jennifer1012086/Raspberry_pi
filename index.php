<?php
    require_once('conn.php');
    $result = $conn->query('select * from house_infoo order by id asc;');

    if(!$result)
    {
        die($conn->error);
    }

    while($row = $result->fetch_assoc())
    {
        echo 'name: '.$row['name'].'=========';
        echo '<a href="delete.php?id= '.$row['id'].'" >DELETE</a>';
        echo '<br>';
        echo 'addr: '.$row['addr'].'<br>';
        echo "<img src=".$row['picture'].".jpg>".'<br>';
        echo 'phone: '.$row['phone'].'<br><br>';
    }

?>

<h2> ADD NEW DATA </h2>
<form method="POST" action="add.php">
    name: <input name="name">
    addr: <input name="addr">
    picture: <input name="picture">
    phone: <input name="phone">
    <input type="submit">
</form>