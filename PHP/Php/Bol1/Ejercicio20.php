
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
    foreach ($alumnos as  $alum) {
        if($alum["nota"] > $maxNota){
            $maxNota = $alum["nota"];
            $result = $alum["nombre"];
        }
    }
    return $result."<br>";
}

function mediaNota($alumnos){
    $nota=0;
    foreach ($alumnos as $alum) {
        $nota=$nota+$alum["nota"];
    }
    return $nota/count($alumnos)."<br>";

}

function mostrarAlumnos($alumnos){
    $nombres=[];
    foreach ($alumnos as $alum) {
        if($alum["edad"] > 19){
        array_push($nombres, $alum["nombre"]);
        }}
    return $nombres;
}

//echo maxNota($alumnos);
//echo mediaNota($alumnos);
//echo implode("- ", mostrarAlumnos($alumnos));

$resultado = "";
if (isset($_GET["accion"])) {
    if ($_GET["accion"] == "media") {
        $resultado = "Media de notas: " . mediaNota($alumnos);
    } elseif ($_GET["accion"] == "maxima") {
        $resultado = "Alumno con la nota más alta: " . maxNota($alumnos);
    } elseif ($_GET["accion"] == "mayores") {
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
    <a href="?accion=maxima"><button>Ver nota máxima</button></a>
    <a href="?accion=media"><button>Ver nota media</button></a>
    <a href="?accion=mayores"><button>Ver mayores de 19</button></a>

    <p><?php echo $resultado; ?></p>
</body>
</html>