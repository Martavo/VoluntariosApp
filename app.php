<?php
function lecturaArchivoJson()
{
    $jsonData = file_get_contents('data.json');
    $dataArray = json_decode($jsonData, true);

    return $dataArray;
}

function asociacionAlumno($dataArray)
{
    $indiceNumAleatorio = array_rand($dataArray['alumnos'], 1);
    $alumnoEscogido = $dataArray['alumnos'][$indiceNumAleatorio]['nombre'];

    return $alumnoEscogido;
}

function imprimirResolucionMasterclass($alumnoEscogido)
{
    echo "El alumno seleccionado para realizar la siguiente Masterclass es: " . $alumnoEscogido . PHP_EOL;
}

function imprimirResolucionShortcut($alumnoEscogido)
{
    echo "El alumno seleccionado para realizar el siguiente Shortcut de la semana es: " . $alumnoEscogido . PHP_EOL;
}
?>
