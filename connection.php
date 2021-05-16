<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "cse482";

$con = mysqli_connect($server, $username, $password, $db);

if($con) {
    ?>
    <script>
        alert('connection successful');
        </script>
        <?php
}else{
    die("no connection" . mysqli_connect_error());
}

