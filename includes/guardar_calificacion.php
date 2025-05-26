<?php
header('Content-Type: application/json');

// Obtener el rating enviado por JavaScript
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['rating']) || !in_array($data['rating'], [1, 2, 3, 4, 5])) {
    echo json_encode(['success' => false, 'message' => 'Calificación inválida.']);
    exit;
}

$rating = intval($data['rating']);
$archivo = 'conteo.json';

// Si el archivo no existe, crear una estructura inicial
if (!file_exists($archivo)) {
    $conteo = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];
} else {
    $conteo = json_decode(file_get_contents($archivo), true);
    if (!is_array($conteo)) {
        $conteo = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];
    }
}

// Sumar 1 al rating recibido
$conteo[$rating]++;
file_put_contents($archivo, json_encode($conteo, JSON_PRETTY_PRINT));

echo json_encode([
    'success' => true,
    'message' => 'Calificación registrada.',
    'conteo' => $conteo
]);
