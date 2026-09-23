<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
    if (isset($_GET["nombre"]) && isset($_GET["edad"]) ){
    $test = $_GET["nombre"];
    $age = $_GET["edad"];
    }
    else{
        $test = "";
        $age=0;
    }
    
    
?>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 450px;">

            <h2 class="text-center mb-4">Mi primer PHP</h2>
            <h2 class="text-center mb-4"><?php echo $test;?></h2>
           


            <form>
                <!-- Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="nombre" 
                        name="nombre"
                        placeholder="Introduce tu nombre"
                        required>
                </div>

      
           
                <!-- Nombre -->
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="edad" 
                        name="edad"
                        placeholder="Introduce tu edad"
                        required>
                </div>

                <!-- Boton -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>

                 <h3 class="text-center mb-4">
                <?php 
                if (isset($_GET["nombre"]) && $age >=18){
                echo "Eres mayor de edad"; 
                } 
                elseif (isset($_GET["nombre"]) && $age <18){
                echo "Eres menor de edad"; 
                }
                
                else {
                    echo "";
                }

                ?></h3>
            </form>

        </div>
    </div>

</body>
</html>