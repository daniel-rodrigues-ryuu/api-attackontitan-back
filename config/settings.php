<?php

// Error reporting for production
error_reporting(0);
ini_set('display_errors', '0');

// Timezone
date_default_timezone_set('Europe/Berlin');

// Settings
$settings = [];

// Path settings
$settings['root'] = dirname(__DIR__);
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';

// Error Handling Middleware settings
$settings['error'] = [

    // Should be set to false in production
    'display_error_details' => true,

    'log_errors' => true,

    'log_error_details' => true,
];

//DB - database
$settings['db'] = [
  'driver' => 'mysql',
  'host' => 'localhost',
  'username' => 'root',
  'database' => 'attackontitan',
  'password' => '',
  'charset' => 'utf8mb4',
  'collation' => 'utf8mb4_unicode_ci',
  'flags' => [
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => true,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 collate utf8mb4_unicode_ci'
  ],
];

return $settings;
