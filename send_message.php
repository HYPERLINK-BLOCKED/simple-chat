<?php
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data['message'])) {
    $message = $data['message'];
    $file = 'messages.txt';
    file_put_contents($file, date('Y-m-d H:i:s') . ': ' . $message . PHP_EOL, FILE_APPEND);
}
?>
