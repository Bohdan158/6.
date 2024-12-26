<?php
// Читання з файлу
if (file_exists('settings.json')) {
    $data = json_decode(file_get_contents('settings.json'), true);
    echo json_encode($data);
}
?>
