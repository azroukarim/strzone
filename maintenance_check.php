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
    'page_channels' => 'on',
    'show_plan_test' => 'on',
    'show_plan_basic' => 'on',
    'show_plan_standard' => 'on',
    'show_plan_premium' => 'on',
    'show_plan_vip' => 'on',
    'show_productions' => 'on',
    'show_sports' => 'on',
    'show_logos' => 'on',
    'show_platforms' => 'on',
    'countdown_target' => '2026-06-11T00:00:00',
    'countdown_slogan_fr' => 'Tic-Tac... le monde attend son roi. Seras-tu celui qui fera trembler les filets ?',
    'countdown_slogan_en' => 'Tic-Tac... the world awaits its king. Will you be the one to shake the nets?'
];

clearstatcache(true, $configFile);

if (file_exists($configFile)) {
    $raw_content = file_get_contents($configFile);
    $decoded = json_decode($raw_content, true);
    if ($decoded && is_array($decoded)) {
        $global_site_settings = array_merge($global_site_settings, $decoded);
    }
}
// Force string type for safety
foreach ($global_site_settings as $key => $val) {
    if ($val === true) $global_site_settings[$key] = 'on';
    if ($val === false) $global_site_settings[$key] = 'off';
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
