<?php
    $connection = mysqli_connect('localhost', 'root', '', 'demo');
    if (! $connection) {
        die("database connection failed");
    }
?>