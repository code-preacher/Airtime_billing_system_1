<?php
$db = new mysqli("localhost", "root", "", "phone");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
