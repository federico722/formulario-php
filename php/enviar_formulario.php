<?php

require_once '..\database\Database.class.php';

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibir los datos enviados desde el formulario
    $modalidad = $_POST['modalidad'];
    $numero_derecho = $_POST['numero_derecho'];
    $nombre_apellido_titular = $_POST['nombre_apellido_titular'];
    $tipo_identificacion = $_POST['tipo_identificacion'];
    $numero_identificacion = $_POST['numero_identificacion'];
    $genero = $_POST['genero'];
    
    // Datos de frecuencia
    $frecuencia_usted = $_POST['frecuencia_usted'];
    $frecuencia_beneficiarios = $_POST['frecuencia_beneficiarios'];
    
    // Preferencias
    $gastronomicas = $_POST['gastronomicas'];
    $culturales = $_POST['culturales'];
    $deportivas = $_POST['deportivas'];
    $sociales = $_POST['sociales'];
    $text_cual = $_POST['text_cual'];
    $otra_cual = $_POST['otra_cual'];
    
    // Datos de contacto
    $app_socios = $_POST['app_socios'];
    $whatsapp = $_POST['whatsapp'];
    $mail = $_POST['mail'];
    
    // Redes sociales
    $revista_somos = $_POST['revista_somos'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];
    
    // Satisfacción general
    $habladores = $_POST['habladores'];
    $mensaje_texto = $_POST['mensaje_texto'];
    $satisfaccion_general = $_POST['satisfaccion_general'];
    
    // Áreas de satisfacción
    $deportivas_satisfaccion = $_POST['deportivas'];
    $gastronomicas_satisfaccion = $_POST['gastronomicas_satisfaccion'];
    $culturales_satisfaccion = $_POST['culturales'];
    $sociales_satisfaccion = $_POST['sociales'];
    $infraestructura_satisfaccion = $_POST['infraestructura'];
    $servicio_satisfaccion = $_POST['servicio'];
    $comunicacion_satisfaccion = $_POST['comunicacion'];
    $infraestructura_modernizacion = $_POST['infraestructura'];
    $diversificacion_servicios = $_POST['diversificacion_servicios'];
    $nuevos_espacios_deportivos = $_POST['nuevos_espacios_deportivos'];
    $servicios_futuros = $_POST['servicios_futuros'];
    
    // Información de pago
    $pago_compensado = $_POST['pago_compensado'];
    
    // Motivación
    $motivacion_uso_club = $_POST['motivacion_uso_club'];

    // Validaciones para verificar si las variables están definidas
    if (!isset($modalidad, $numero_derecho, $nombre_apellido_titular, $tipo_identificacion, $numero_identificacion, $genero, 
    $frecuencia_usted, $frecuencia_beneficiarios, $gastronomicas, $culturales, $deportivas, $sociales, $text_cual, $otra_cual, 
    $app_socios, $whatsapp, $mail, $revista_somos, $instagram, $facebook, $habladores, $mensaje_texto, $satisfaccion_general, 
    $deportivas_satisfaccion, $gastronomicas_satisfaccion, $culturales_satisfaccion, $sociales_satisfaccion, $infraestructura_satisfaccion, 
    $servicio_satisfaccion, $comunicacion_satisfaccion, $infraestructura_modernizacion, $diversificacion_servicios, $nuevos_espacios_deportivos, 
    $servicios_futuros, $pago_compensado, $motivacion_uso_club)) {

    // Código de manejo de error o validación
    echo "Algunos campos no han sido definidos correctamente.";
    }


    }else {
        echo "No se recibieron datos.";
    }
} catch (\Throwable $th) {
    error_log($th->getMessage());
    echo "Ocurrió un error. Por favor, inténtalo de nuevo más tarde.";
}