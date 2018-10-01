<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
</head>
<body>
<div class="table1" style="padding:10px;">
<table style="width:50%; border:2px;">
<caption>All data</caption>
<tr>
<th>ID</th><th>Name</th><th>Phone</th><th>Email</th>
</tr>
<?php
require("connect.php");
$res=$conn->query("SELECT * FROM details");
while($r=$res->fetch_assoc())
{
	?>
	<tr>
	<td><?php echo $r["id"];?></td>
	<td><?php echo $r["name"];?></td>
	<td><?php echo $r["phone"];?></td>
	<td><?php echo $r["email"];?></td>
	</tr>
<?php
}
?>
</table>
</div>
<div class="table2" style="padding:10px;">
<table style="width:50%; border:2px;">
<caption>Data with Name constraint</caption>
<tr>
<th>ID</th><th>Name</th><th>Phone</th><th>Email</th>
</tr>
<?php
$res=$conn->query("SELECT * FROM details where name='abc' or name='def'");
while($r=$res->fetch_assoc())
{
	?>
	<tr>
	<td><?php echo $r["id"];?></td>
	<td><?php echo $r["name"];?></td>
	<td><?php echo $r["phone"];?></td>
	<td><?php echo $r["email"];?></td>
	</tr>
<?php
}
?>
</table>
</div>
</body>
</html>
	