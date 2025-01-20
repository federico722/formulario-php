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

    // Procesar los datos (por ejemplo, guardarlos en la base de datos)
    echo "<h3>Datos recibidos:</h3>";
    echo "Modalidad: " . $modalidad . "<br>";
    echo "Número de derecho: " . $numero_derecho . "<br>";
    echo "Nombre y Apellidos: " . $nombre_apellido_titular . "<br>";
    echo "Tipo de identificación: " . $tipo_identificacion . "<br>";
    echo "Número de identificación: " . $numero_identificacion . "<br>";
    echo "Sexo: " . ($genero == 'F' ? 'Femenino' : 'Masculino') . "<br>";

    // Mostrar preferencias y otras respuestas
    echo "Frecuencia personal: " . $frecuencia_usted . "<br>";
    echo "Frecuencia beneficiarios: " . $frecuencia_beneficiarios . "<br>";
    echo "Preferencias gastronómicas: " . $gastronomicas . "<br>";
    echo "Preferencias culturales: " . $culturales . "<br>";
    echo "Preferencias deportivas: " . $deportivas . "<br>";
    echo "Preferencias sociales: " . $sociales . "<br>";
    echo "Otras preferencias: " . $text_cual . "<br>";
    echo "Otra cual: " . $otra_cual . "<br>";
    
    // Datos de contacto
    echo "Aplicación socios: " . $app_socios . "<br>";
    echo "WhatsApp: " . $whatsapp . "<br>";
    echo "Correo: " . $mail . "<br>";
    
    // Redes sociales
    echo "Revista Somos: " . $revista_somos . "<br>";
    echo "Instagram: " . $instagram . "<br>";
    echo "Facebook: " . $facebook . "<br>";
    
    // Satisfacción general
    echo "Satisfacción habladores: " . $habladores . "<br>";
    echo "Mensaje de texto: " . $mensaje_texto . "<br>";
    echo "Satisfacción general: " . $satisfaccion_general . "<br>";
    
    // Satisfacción por áreas
    echo "Satisfacción deportiva: " . $deportivas_satisfaccion . "<br>";
    echo "Satisfacción gastronómica: " . $gastronomicas_satisfaccion . "<br>";
    echo "Satisfacción cultural: " . $culturales_satisfaccion . "<br>";
    echo "Satisfacción social: " . $sociales_satisfaccion . "<br>";
    echo "Satisfacción infraestructura: " . $infraestructura_satisfaccion . "<br>";
    echo "Satisfacción servicio: " . $servicio_satisfaccion . "<br>";
    echo "Satisfacción comunicación: " . $comunicacion_satisfaccion . "<br>";
    echo "Satisfacción modernización infraestructura: " . $infraestructura_modernizacion . "<br>";
    echo "Diversificación de servicios: " . $diversificacion_servicios . "<br>";
    echo "Nuevos espacios deportivos: " . $nuevos_espacios_deportivos . "<br>";
    echo "Servicios futuros: " . $servicios_futuros[0] . "<br>";
    
    // Información de pago
    echo "Pago compensado: " . $pago_compensado . "<br>";
    
    // Motivación de uso del club
    echo "Motivación para el uso del club: " . $motivacion_uso_club . "<br>";


    }else {
        echo "No se recibieron datos.";
    }
} catch (\Throwable $th) {
    error_log($th->getMessage());
    echo "Ocurrió un error. Por favor, inténtalo de nuevo más tarde.";
}