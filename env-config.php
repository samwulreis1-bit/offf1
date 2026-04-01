<?php
header('Content-Type: application/javascript');

// Captura as variáveis de ambiente da Railway ou usa valores padrão de fallback
$pixelId = getenv('UTMIFY_PIXEL_ID') ?: "67c65ea78480a2789186da08";
$apiUrl = getenv('DUTTYFY_API_URL') ?: "https://www.pagamentos-seguros.app/api-pix/OSS7n1_UVPInD6FtO3fWz1U5TaJzycMEVQPCHOwpu2auZ51pABGdX1MpcRUUwZxQE4zvexNSomX6Fat34HoeqA";

echo "window.ENV_PIXEL_ID = '" . addslashes($pixelId) . "';\n";
echo "window.ENV_API_URL = '" . addslashes($apiUrl) . "';\n";
?>
