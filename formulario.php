
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Datos de la persona</h1>
    <form action="index.php" method="post">
        <div>
            <label>Código:</label>
            <input type="number" name="codigo" required>
        </div>
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
