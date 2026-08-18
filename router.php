<?php
// router.php - Used for local PHP built-in server to handle extensionless URLs
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|ico|woff|woff2|ttf|svg)$/', $_SERVER["REQUEST_URI"])) {
    return false; // serve the requested resource as-is.
}

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . $path;

// If it's a directory, look for index.php
if (is_dir($file)) {
    $file = rtrim($file, '/') . '/index.php';
}

if (is_file($file)) {
    return false; // serve the file
}

// Append .php and check
if (is_file($file . '.php')) {
    include $file . '.php';
    exit;
}

// Default to index
if ($path === '/') {
    include __DIR__ . '/index.php';
    exit;
}

http_response_code(404);
echo "404 Not Found";
?>
