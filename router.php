<?php

// CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Handle OPTIONS
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Get path
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Normalize path
$file = __DIR__ . $path;

// ✅ If file exists → include it manually (IMPORTANT CHANGE)
if ($path !== "/" && file_exists($file) && is_file($file)) {
    require $file;
    exit();
}

// fallback
require __DIR__ . "/index.php";
