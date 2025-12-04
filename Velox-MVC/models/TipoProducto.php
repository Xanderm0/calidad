<?php
require_once "config.php";

class TipoProducto {

    public static function all() {
        global $conn;
        return $conn->query("SELECT * FROM tipo_producto")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM tipo_producto WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($nombre) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO tipo_producto (nombre) VALUES (?)");
        $stmt->execute([$nombre]);
    }

    public static function update($id, $nombre) {
        global $conn;
        $stmt = $conn->prepare("UPDATE tipo_producto SET nombre = ? WHERE id = ?");
        $stmt->execute([$nombre, $id]);
    }

    public static function delete($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM tipo_producto WHERE id = ?");
        $stmt->execute([$id]);
    }
}
