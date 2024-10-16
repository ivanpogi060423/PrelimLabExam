<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inventory Dashboard</title>
    </head>
<body>
    <h1>Inventory Dashboard</h1>
    <h2>Current Inventory</h2>
    <table border="1">
        <tr>
            <th>Item Name</th>
            <th>Quantity</th>
        </tr>
        <?php foreach ($items as $item => $quantity): ?>
        <tr>
            <td><?php echo htmlspecialchars($item); ?></td>
            <td><?php echo htmlspecialchars($quantity); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <!-- Form to Add New Item -->
    <h2>Add New Item</h2>
    <form action="index.php" method="post">
        <label for="name">Item Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>
        <button type="submit" name="add">Add Item</button>
    </form>
    
    <!-- Form to Search for Item -->
    <h2>Search for Item</h2>
    <form action="index.php" method="get">
        <label for="search">Item Name:</label>
        <input type="text" id="search" name="search" required>
        <button type="submit" name="search_btn">Search</button>
    </form>

    <!-- Form to Clear Inventory -->
    <h2>Clear Inventory</h2>
    <form action="index.php" method="post">
        <button type="submit" name="clear">Clear Inventory</button>
    </form>

    <!-- Display Inventory Table -->
    
</body>
</html>
