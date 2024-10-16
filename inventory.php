<?php
// Initialize or load inventory
session_start();
if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = array();
}

// Get the current inventory
function getInventory() {
    return $_SESSION['inventory'];
}

// Add a new item to the inventory
function addItem($name, $quantity) {
    if (empty($name) || $quantity <= 0) {
        return;
    }
    
    $inventory = getInventory();
    if (!array_key_exists($name, $inventory)) {
        $inventory[$name] = $quantity;
        $_SESSION['inventory'] = $inventory;
    }
}

// Search for an item by name
function searchItem($name) {
    $inventory = getInventory();
    return array_key_exists($name, $inventory) ? $inventory[$name] : null;
}
?>
