<?php
/**
 * Simple API to return maintenance status
 * This file will be called by maintenance-check.js
 */
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Allows fetching from other domains if needed

$configFile = 'maintenance_config.json';

if (!file_exists($configFile)) {
    echo json_encode(['status' => 'live']);
    exit;
}

$config = json_decode(file_get_contents($configFile), true);
echo json_encode(['status' => $config['status'] ?? 'live']);
