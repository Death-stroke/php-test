<?php
require("connect.php");
$conn->query("INSERT INTO details(name,phone,email) VALUES('abc',987654321,'abc@gmail.com')");
$conn->query("INSERT INTO details(name,phone,email) VALUES('def',123456789,'def@gmail.com')");
$conn->query("INSERT INTO details(name,phone,email) VALUES('pqr',543216789,'pqr@gmail.com')");
$conn->query("INSERT INTO details(name,phone,email) VALUES('xyz',567890432,'xyz@gmail.com')");
$conn->query("INSERT INTO details(name,phone,email) VALUES('lmn',987651234,'lmn@gmail.com')");
$conn->query("INSERT INTO details(name,phone,email) VALUES('abc',987654321,'abc@gmail.com')");
?>