<?php include 'con.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Students List</title>
</head>
<body>

<h2>Students List</h2>

<a href="add.php">+ Add New Student</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>

<?php
$sql = "SELECT * FROM students";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>