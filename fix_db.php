<?php

// Database connection
$db_name = "mysql:host=localhost;dbname=shop_db";
$username = "root";
$password = "";

try {
    $conn = new PDO($db_name, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check for id=0
    $check = $conn->prepare("SELECT COUNT(*) FROM users WHERE id = 0");
    $check->execute();
    $count = $check->fetchColumn();

    if ($count > 0) {
        echo "Found row with id=0. Deleting...<br>";
        $delete = $conn->prepare("DELETE FROM users WHERE id = 0");
        $delete->execute();
        echo "Deleted.<br>";
    } else {
        echo "No row with id=0 found.<br>";
    }

    // Ensure id is AUTO_INCREMENT
    $alter_auto = $conn->prepare("ALTER TABLE users MODIFY id INT(100) NOT NULL AUTO_INCREMENT");
    $alter_auto->execute();
    echo "Ensured id is AUTO_INCREMENT.<br>";

    // Reset auto-increment
    $alter = $conn->prepare("ALTER TABLE users AUTO_INCREMENT = 1");
    $alter->execute();
    echo "Auto-increment reset.<br>";

    echo "Database fixed successfully!";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>