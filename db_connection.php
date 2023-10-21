<?php

function establishDatabaseConnection()
{
    try {
        return new PDO('mysql:host=localhost:3306;dbname=pos_bordadora', 'root', '');
    } catch (PDOException $exception) {
        echo "Connection Error: ", $exception->getMessage();
    }
}