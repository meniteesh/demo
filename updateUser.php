<?php
    include_once './db.php';
    $select = "SELECT * FROM users";
    $result = mysqli_query($connection, $select);
?>