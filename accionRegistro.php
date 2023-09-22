<?php
include __DIR__ . '/../models/estudiante.php';
include __DIR__ . '/../controllers/entityController.php';
include __DIR__ . '/../controllers/database/databaseController.php';
include __DIR__ . '/../controllers/estudiantes/estudianteController.php';

use App\models\Estudiante;
use App\controllers\estudiantes\EstudianteController;


$estudiante = new Estudiante();
$estudiante->set('codigo', $_POST['codigo']);
$estudiante->set('nombre', $_POST['nombre']);
$estudiante->set('email', $_POST['email']);

$estudianteController= new EstudianteController();

$resultado = $estudianteController->addItem($estudiante);

// si $resultado == true -> guardo el registro;

if( $resultado == true) {
    echo "Se guardo el estudiante en la base de datos exitosamente";
}else{
    echo "ocurrio un error en la adicion del estudiante en la base de datos";
};
$estudianteController = new EstudianteController();
$lista = $estudianteController->allData();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- hjnk -->
</body>
</html>
