<?php
session_start();

// Verifica si se ha enviado el formulario de cantidad de empleados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cantidad_empleados"])) {
    $cantidadEmpleados = (int)$_POST["cantidad_empleados"];
    $_SESSION["cantidad_empleados"] = $cantidadEmpleados;
    
    // Redirige al formulario de ingreso de datos de empleados
    header("Location: formulario_empleados.php");
    exit;
} else {
    header("Location: formulario.html");
    exit;
}
?>

