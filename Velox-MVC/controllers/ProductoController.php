<?php
require_once "models/Producto.php";
require_once "models/TipoProducto.php";

class ProductoController {

    public function index() {
        $productos = Producto::all();
        $tipos = TipoProducto::all();
        $editProducto = null;

        if (isset($_GET['edit'])) {
            $editProducto = Producto::find($_GET['edit']);
        }

        require "views/productos.php";
    }

    public function store() {
        if (!empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['tipo_id'])) {
            Producto::create($_POST['nombre'], $_POST['precio'], $_POST['tipo_id']);
        }
        header("Location: index.php?c=producto");
        exit;
    }

    public function update() {
        if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['precio']) && !empty($_POST['tipo_id'])) {
            Producto::update($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['tipo_id']);
        }
        header("Location: index.php?c=producto");
        exit;
    }

    public function delete() {
        if (!empty($_GET['id'])) {
            Producto::delete($_GET['id']);
        }
        header("Location: index.php?c=producto");
        exit;
    }
}
