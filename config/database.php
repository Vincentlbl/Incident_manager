<?php
// config/database.php
function getDBConnection() {
    $host = 'localhost';
    $port = '3308';
    $dbname = 'gestion_incidents';
    $username = 'root';
    $password = '';

    try {
        return new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}
