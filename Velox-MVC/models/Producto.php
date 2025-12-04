<?php
require_once "config.php";

class Producto {

    public static function all() {
        global $conn;
        return $conn->query("
            SELECT p.*, t.nombre AS tipo
            FROM producto p
            JOIN tipo_producto t ON p.tipo_id = t.id
        ")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM producto WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($nombre, $precio, $tipo_id) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO producto (nombre, precio, tipo_id) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $precio, $tipo_id]);
    }

    public static function update($id, $nombre, $precio, $tipo_id) {
        global $conn;
        $stmt = $conn->prepare("UPDATE producto SET nombre = ?, precio = ?, tipo_id = ? WHERE id = ?");
        $stmt->execute([$nombre, $precio, $tipo_id, $id]);
    }

    public static function delete($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM producto WHERE id = ?");
        $stmt->execute([$id]);
    }
}
