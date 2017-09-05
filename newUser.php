<?php
    include_once 'db.php';

    $insert = mysqli_query($connection,"INSERT INTO users (username, password) VALUES('".$_POST["username"]."', '".$_POST["password"]."')");
    if (!$insert) {
        echo "Data Insertion Failed";
    }else {
        header('location: ./index.php');
        echo '<script type="text/javascript">alert("User Added Successfully");</script>';
    }
?>