<?php
// Include the inventory management logic
include('inventory.php');

// Get the current list of items
$items = getInventory();

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        
        if ($name && $quantity > 0) {
            addItem($name, $quantity);
            header('Location: index.php'); // Refresh to show updated list
            exit();
        } else {
            echo '<p>Error: Invalid item name or quantity.</p>';
        }
    }

    if (isset($_POST['clear'])) {
        clearInventory();
        header('Location: index.php'); // Refresh to show cleared list
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['search_btn'])) {
    $search = $_GET['search'];
    $item = searchItem($search);
    if ($item !== null) {
        echo '<p>Item: ' . htmlspecialchars($search) . ' - Quantity: ' . htmlspecialchars($item) . '</p>';
    } else {
        echo '<p>Product not found.</p>';
    }
}

// Include the HTML dashboard
include('dashboard.php');

// Clear the inventory
function clearInventory() {
    $_SESSION['inventory'] = array(); // Reset inventory to an empty array
}
?>
