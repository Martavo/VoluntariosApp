<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Sorteo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-blue-100 flex text-xl items-center justify-center min-h-screen">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'app.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcion = $_POST['opcion'];
    $dataArray = lecturaArchivoJson();
    switch ($opcion) {
        case 'masterclass':
            $alumnoEscogido = asociacionAlumno($dataArray);
            imprimirResolucionMasterclass($alumnoEscogido);
            break;
        case 'shortcut':
            $alumnoEscogido = asociacionAlumno($dataArray);
            imprimirResolucionShortcut($alumnoEscogido);
            break;
        default:
            echo "Opción inválida";
    }
} else {
    echo "El formulario no fue enviado correctamente.";
}
?>
<div class="fixed bottom-0 right-0 p-4">
  <a href="index.html" class="bg-blue-100 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver al inicio</a>
</div>
</body>
</html>