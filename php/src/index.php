<?php

require_once __DIR__ . '/boot.php';

if ($_SERVER['REQUEST_URI'] === '/hook' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = json_decode(file_get_contents('php://input'), true);
    JSON(200, $body);
}

if ($_SERVER['REQUEST_URI'] === '/health' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    JSON(200, ['status' => 'up']);
}

JSON(404, ['error' => 'not found']);
