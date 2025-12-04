<?php
require_once "models/TipoProducto.php";

class TipoProductoController {

    public function index() {
        $tipos = TipoProducto::all();
        $editTipo = null;

        // Cargar tipo para editar si existe el parámetro 'edit'
        if (isset($_GET['edit'])) {
            $editTipo = TipoProducto::find($_GET['edit']);
        }

        require "views/tipos.php";
    }

    public function store() {
        if (!empty($_POST['nombre'])) {
            TipoProducto::create($_POST['nombre']);
        }
        header("Location: index.php?c=tipoProducto");
        exit;
    }

    public function update() {
        if (!empty($_POST['id']) && !empty($_POST['nombre'])) {
            TipoProducto::update($_POST['id'], $_POST['nombre']);
        }
        header("Location: index.php?c=tipoProducto");
        exit;
    }

    public function delete() {
        if (!empty($_GET['id'])) {
            TipoProducto::delete($_GET['id']);
        }
        header("Location: index.php?c=tipoProducto");
        exit;
    }
}
