<?php

$alumnos = [
    ["nombre" => "Ana", "edad" => 19, "nota" => 7.5],
    ["nombre" => "Luis", "edad" => 21, "nota" => 6.8],
    ["nombre" => "Marta", "edad" => 18, "nota" => 9.2],
    ["nombre" => "Carlos", "edad" => 20, "nota" => 5.4],
];

function maxNota($alumnos){
    $result = '';
    $maxNota = 0;
    foreach ($alumnos as $alum) {
        if($alum["nota"] > $maxNota){
            $maxNota = $alum["nota"];
            $result = $alum["nombre"];
        }
    }
    return $result;
}

function mediaNota($alumnos){
    $nota = 0;
    foreach ($alumnos as $alum) {
        $nota = $nota + $alum["nota"];
    }
    return $nota / count($alumnos);
}

function mostrarAlumnos($alumnos){
    $nombres = [];
    foreach ($alumnos as $alum) {
        if($alum["edad"] > 19){
            array_push($nombres, $alum["nombre"]);
        }
    }
    return $nombres;
}

$resultado = "";
if (isset($_POST["accion"])) {
    if ($_POST["accion"] == "media") {
        $resultado = "Media de notas: " . mediaNota($alumnos);
    } elseif ($_POST["accion"] == "maxima") {
        $resultado = "Alumno con la nota mass alta: " . maxNota($alumnos);
    } elseif ($_POST["accion"] == "mayores") {
        $resultado = "Alumnos mayores de 19: " . implode(", ", mostrarAlumnos($alumnos));
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu alumnos</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="accion" value="maxima">Ver nota mas alta</button>
        <button type="submit" name="accion" value="media">Ver nota media</button>
        <button type="submit" name="accion" value="mayores">Ver mayores de 19</button>
    </form>

    <p><?php echo $resultado; ?></p>
</body>
</html>