<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Velox Productos</title>
    <link rel="stylesheet" href="css/productos.css">
</head>
<body>

<h2>Velox Productos</h2>

<!-- Formulario Crear / Editar -->
<form method="POST" action="index.php?c=producto&a=<?= isset($editProducto) ? 'update' : 'store' ?>">
    <input type="hidden" name="id" value="<?= $editProducto['id'] ?? '' ?>">

    Nombre:
    <input type="text" name="nombre" value="<?= $editProducto['nombre'] ?? '' ?>" required>

    Precio:
    <input type="number" step="0.01" name="precio" value="<?= $editProducto['precio'] ?? '' ?>" required>

    Tipo:
    <select name="tipo_id" required>
        <option value="">Seleccione un tipo</option>
        <?php foreach($tipos as $t): ?>
            <option value="<?= $t['id'] ?>" <?= isset($editProducto) && $editProducto['tipo_id'] == $t['id'] ? 'selected' : '' ?>>
                <?= $t['nombre'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit"><?= isset($editProducto) ? 'Actualizar' : 'Crear' ?></button>
</form>

<br>

<!-- Tabla de Productos -->
<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Tipo</th>
    <th>Acciones</th>
</tr>

<?php if (!empty($productos)): ?>
    <?php foreach($productos as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nombre'] ?></td>
            <td><?= $p['precio'] ?></td>
            <td><?= $p['tipo'] ?></td>
            <td>
                <a href="index.php?c=producto&edit=<?= $p['id'] ?>">Editar</a> |
                <a href="index.php?c=producto&a=delete&id=<?= $p['id'] ?>" onclick="return confirm('¿Desea eliminar este producto?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="5">No hay productos registrados.</td>
    </tr>
<?php endif; ?>
</table>

<br>
<a href="tipos.php?c=tipoProducto">Ir a tipos de producto</a>

</body>
</html>

