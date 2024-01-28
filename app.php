<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo</title>
</head>
<body>

<form action="resultado.php" method="post">
    <label for="seleccion">Selecciona una opción:</label>
    <select id="seleccion" name="opcion">
        <option value="masterclass">Masterclass</option>
        <option value="shortcut">Shortcut</option>
    </select>
    <br>
    <input type="submit" value="Realizar Sorteo">
</form>

</body>
</html>