<?php
require_once __DIR__ . '/../../config/database.php';


class Incident {
    public static function getAll() {
        $pdo = getDBConnection();
        $stmt = $pdo->query('SELECT * FROM incidents');
        return $stmt->fetchAll();
    }

    public static function getById($id) {
        $pdo = getDBConnection();
        $stmt = $pdo->prepare('SELECT * FROM incidents WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public static function create($description) {
        $pdo = getDBConnection();
        $stmt = $pdo->prepare('INSERT INTO incidents (description) VALUES (:description)');
        $stmt->execute(['description' => $description]);
    }

    public static function update($id, $description, $status) {
        $pdo = getDBConnection();
        $stmt = $pdo->prepare('UPDATE incidents SET description = :description, status = :status WHERE id = :id');
        $stmt->execute(['description' => $description, 'status' => $status, 'id' => $id]);
    }

    public static function delete($id) {
        $pdo = getDBConnection();
        $stmt = $pdo->prepare('DELETE FROM incidents WHERE id = :id');
        $stmt->execute(['id' => $id]);
    }

    public static function getAllGroupedByStatus() {
        $pdo = getDBConnection();
        $stmt = $pdo->query('SELECT * FROM incidents ORDER BY status, created_at DESC');
        return $stmt->fetchAll();
    }
    
}
