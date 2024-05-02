<?php
$file = 'messages.txt';
if (file_exists($file)) {
    $messages = file($file);
    foreach ($messages as $message) {
        echo $message . '<br>';
    }
}
?>
