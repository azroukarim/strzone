<?php
$configFile = __DIR__ . '/maintenance_config.json';
if (file_exists($configFile)) {
    $config = json_decode(file_get_contents($configFile), true);
    if (isset($config['status']) && $config['status'] === 'on') {
        // Rediriger vers la page de maintenance
        if (basename($_SERVER['PHP_SELF']) !== 'enpane.php') {
            header("Location: enpane.php");
            exit();
        }
    }
}
?>
