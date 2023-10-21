<?php
include 'db_connection.php';

$db = establishDatabaseConnection();

// Retrieve the menu items
$sql = "SELECT * FROM ref_menu ORDER BY id ASC";
$statement = $db->prepare($sql);
$statement->execute();
$menuItems = $statement->fetchAll(PDO::FETCH_ASSOC);

// Close the database connection
$db = null;

// Display the menu items
foreach ($menuItems as $menuItem) {
    echo "<h2>" . $menuItem['menu_name'] . "</h2>";
    echo "<p>" . $menuItem['menu_desc'] . "</p>";
}