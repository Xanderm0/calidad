<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Velox Productos</title>
    <link rel="stylesheet" href="css/tipoProducto.css">
</head>
<body>

<h2>Tipos de Producto Velox</h2>

<!-- Formulario Crear / Editar -->
<form method="POST" action="index.php?c=tipoProducto&a=<?= isset($editTipo) ? 'update' : 'store' ?>">
    <input type="hidden" name="id" value="<?= $editTipo['id'] ?? '' ?>">

    Nombre:
    <input type="text" name="nombre" value="<?= $editTipo['nombre'] ?? '' ?>" required>

    <button type="submit">
        <?= isset($editTipo) ? 'Actualizar' : 'Crear' ?>
    </button>
</form>

<br>

<!-- Tabla de Tipos -->
<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Acciones</th>
</tr>

<?php if (!empty($tipos)): ?>
    <?php foreach($tipos as $t): ?>
        <tr>
            <td><?= $t['id'] ?></td>
            <td><?= $t['nombre'] ?></td>
            <td>
                <a href="index.php?c=tipoProducto&edit=<?= $t['id'] ?>">Editar</a> |
                <a href="index.php?c=tipoProducto&a=delete&id=<?= $t['id'] ?>" onclick="return confirm('¿Desea eliminar este tipo?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="3">No hay tipos de producto.</td>
    </tr>
<?php endif; ?>
</table>

<br>
<a href="productos.php?c=producto">Ir a productos</a>

</body>
</html>
