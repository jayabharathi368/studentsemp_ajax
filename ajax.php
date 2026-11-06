<?php
include 'con.php';
if(isset($_POST['delete_id'])){
$conn->query("DELETE FROM employees WHERE id='".$_POST['delete_id']."'");
echo "Deleted"; exit;
}
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
if($id==""){
$conn->query("INSERT INTO employees (name,email) VALUES ('$name','$email')");
echo "Saved";
} else {
$conn->query("UPDATE employees SET name='$name', email='$email' WHERE id='$id'");
echo "Updated";
}
?>