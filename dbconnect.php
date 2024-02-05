<?php
$con = mysqli_connect("localhost", "root", "", "perfume_db");
if (!$con) {
    echo "Database Not Connected!";
    die();
}
?>