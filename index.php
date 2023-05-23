<?php 

session_start();
require_once __DIR__ . "/App/Core/App.php";
require_once __DIR__ . "/App/Core/Controller.php";
require_once __DIR__ . "/App/Core/DB.php";


$envFile = __DIR__ . '/.env';

if (file_exists($envFile)) {
    $env = parse_ini_file($envFile);
    
    // Ánh xạ các giá trị từ tập tin .env vào biến $_ENV
    foreach ($env as $key => $value) {
        $_ENV[$key] = $value;
    }
}

$app = new App();

?>