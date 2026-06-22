<?php
$conn = mysqli_connect("localhost", "root", "", "megatrove_db");

// URL se ID uthao (e.g., product-detail.php?id=2)
$id = $_GET['id']; 

$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);
?>