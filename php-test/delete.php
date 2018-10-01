<?php
require("connect.php");
$conn->query("DELETE FROM details WHERE email='def@gmail.com'");
?>