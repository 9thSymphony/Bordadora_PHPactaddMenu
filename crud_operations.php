<?php
include 'db_connection.php';

function addMenu($menuName, $menuDescription)
{
    $db = establishDatabaseConnection();

    $sql = "INSERT INTO ref_menu(menu_name, menu_desc) VALUES(?, ?)";
    $statement = $db->prepare($sql);
    if ($statement->execute(array($menuName, $menuDescription))) {
        // Success
    } else {
        // Error
    }

    $db = null;
}

function updateMenuData($menuName, $menuDescription, $id)
{
    $db = establishDatabaseConnection();

    $sql = "UPDATE ref_menu SET menu_name=?, menu_desc=? WHERE id=?";
    $statement = $db->prepare($sql);
    if ($statement->execute([$menuName, $menuDescription, $id])) {
        // Success
    } else {
        // Error
    }

    $db = null;
}

function deleteMenuData($id)
{
    $db = establishDatabaseConnection();

    $sql = "DELETE FROM ref_menu WHERE id=?";
    $statement = $db->prepare($sql);
    if ($statement->execute([$id])) {
        // Success
    } else {
        // Error
    }

    $db = null;
}