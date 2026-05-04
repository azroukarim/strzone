<?php
/**
 * STREAMTV - Maintenance & Granular Visibility Logic
 */
$configFile = __DIR__ . '/maintenance_config.json';
$global_site_settings = [
    'status' => 'off', 
    'show_countdown' => 'on',
    'page_plans' => 'on',
    'page_promos' => 'on',
    'page_contact' => 'on',
    'page_download' => 'on',
    'page_test' => 'on',
    'page_channels' => 'on'
];

clearstatcache(true, $configFile);

if (file_exists($configFile)) {
    $raw_content = file_get_contents($configFile);
    $decoded = json_decode($raw_content, true);
    if ($decoded) {
        $global_site_settings = array_merge($global_site_settings, $decoded);
    }
}

// 1. Global Maintenance Redirect
if (isset($global_site_settings['status']) && $global_site_settings['status'] === 'on') {
    if (basename($_SERVER['PHP_SELF']) !== 'enpane.php') {
        header("Location: enpane.php");
        exit();
    }
}

// 2. Granular Page Protection
$current_page_file = basename($_SERVER['PHP_SELF']);
$page_mapping = [
    'plans.php' => 'page_plans',
    'promos.php' => 'page_promos',
    'contact.php' => 'page_contact',
    'telechargement.php' => 'page_download',
    'test-plan.php' => 'page_test',
    'channels.php' => 'page_channels'
];

if (isset($page_mapping[$current_page_file])) {
    $setting_key = $page_mapping[$current_page_file];
    if (isset($global_site_settings[$setting_key]) && $global_site_settings[$setting_key] === 'off') {
        header("Location: index.php");
        exit();
    }
}

// 3. Setup Global Variables for Header
$show_countdown = (isset($global_site_settings['show_countdown']) && $global_site_settings['show_countdown'] === 'on') ? 'on' : 'off';
?>
