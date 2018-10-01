<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

require("connect.php");
$sql="SELECT * FROM details WHERE name = '".$q."'";
$res = $conn->query($sql);
?>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
</tr>
<?php
while($row = $res->fetch_array()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
?></table>
</body>
</html>