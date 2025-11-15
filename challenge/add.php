<!DOCTYPE html>
<html>
<head>
    <title>Add New Item</title>
</head>
<body>

<h2>Add New Item</h2>

<form action="add.php" method="POST">
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" required></textarea><br><br>

    <label>Quantity:</label><br>
    <input type="number" name="quantity" required><br><br>

    <label>Price:</label><br>
    <input type="number" step="0.01" name="price" required><br><br>

    <button type="submit" name="add">Add Item</button>
</form>


<?php
include_once("config.php");

if (isset($_POST['add'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (title, description, quantity, price)
            VALUES (:title, :description, :quantity, :price)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':price', $price);

    $stmt->execute();

    header("Location: dashboard.php");
    exit();
}
?>
</body>
</html>