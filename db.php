<?php
$conn = mysqli_connect("localhost", "root", "", "finaldb");

if (!$conn) {
    die("May mali: " . mysqli_connect_error());
}
?>