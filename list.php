<?php
include 'con.php';
$r = $conn->query("SELECT * FROM employees");
echo "<table border='1' cellpadding='10'><tr><th>Name</th><th>Email</th><th>Action</th></tr>";
while($row = $r->fetch_assoc()){
echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td><button onclick=\"editData('".$row['id']."','".$row['name']."','".$row['email']."')\">Edit</button> <button onclick=\"delData('".$row['id']."')\">Delete</button></td></tr>";
}
echo "</table>";
?>