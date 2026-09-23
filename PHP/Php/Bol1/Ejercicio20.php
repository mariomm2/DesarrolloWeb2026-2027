
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
        array_push($nombres, $alum["edad"]);
        }}
    return $nombres;
}

//echo maxNota($alumnos);
//echo mediaNota($alumnos);
//echo implode("- ", mostrarAlumnos($alumnos));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu alumnos</title>
</head>
<body>
    <a href="?notaMaxima"><button>Ver nota máxima</button></a>
    <p><?php echo maxNota($alumnos);?></p>
    <a href="?notaMedia"><button>Ver nota media</button></a>  
    <p><?php echo mediaNota($alumnos);?></p>
    <a href="?mayores19"><button>Ver mayores de 19</button></a>
    <p><?php echo implode("- ", mostrarAlumnos($alumnos)); ?></p>
</body>
</html>