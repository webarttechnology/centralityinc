<?php
// ===============================
// Simple .env loader (no Composer)
// ===============================
function load_env($path) {
    if (!file_exists($path)) {
        return;
    }
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue; // skip comments
        }
        if (strpos($line, '=') === false) {
            continue; // skip malformed lines
        }
        list($name, $value) = array_map('trim', explode('=', $line, 2));
        if (!array_key_exists($name, $_ENV)) {
            $_ENV[$name] = $value;
            putenv("$name=$value");
        }
    }
}

// Load .env file from project root
load_env(__DIR__ . '/.env');

// ===============================
// Database Settings
// ===============================
define('DB_NAME',     $_ENV['DB_NAME']     ?? 'your_db_name');
define('DB_USER',     $_ENV['DB_USER']     ?? 'your_db_user');
define('DB_PASSWORD', $_ENV['DB_PASSWORD'] ?? 'your_db_password');
define('DB_HOST',     $_ENV['DB_HOST']     ?? 'localhost');

define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// ===============================
// Authentication Unique Keys and Salts
// Generate new ones: https://api.wordpress.org/secret-key/1.1/salt/
// ===============================
define('AUTH_KEY',         $_ENV['AUTH_KEY']         ?? 'put-your-key-here');
define('SECURE_AUTH_KEY',  $_ENV['SECURE_AUTH_KEY']  ?? 'put-your-key-here');
define('LOGGED_IN_KEY',    $_ENV['LOGGED_IN_KEY']    ?? 'put-your-key-here');
define('NONCE_KEY',        $_ENV['NONCE_KEY']        ?? 'put-your-key-here');
define('AUTH_SALT',        $_ENV['AUTH_SALT']        ?? 'put-your-key-here');
define('SECURE_AUTH_SALT', $_ENV['SECURE_AUTH_SALT'] ?? 'put-your-key-here');
define('LOGGED_IN_SALT',   $_ENV['LOGGED_IN_SALT']   ?? 'put-your-key-here');
define('NONCE_SALT',       $_ENV['NONCE_SALT']       ?? 'put-your-key-here');

// ===============================
// Table Prefix
// ===============================
$table_prefix = $_ENV['TABLE_PREFIX'] ?? 'wp_';

// ===============================
// Debug Mode
// ===============================
define('WP_DEBUG',         ($_ENV['WP_DEBUG']         ?? 'false') === 'true');
define('WP_DEBUG_LOG',     ($_ENV['WP_DEBUG_LOG']     ?? 'true') === 'true');
define('WP_DEBUG_DISPLAY', ($_ENV['WP_DEBUG_DISPLAY'] ?? 'false') === 'true');

// ===============================
// Extra Settings
// ===============================
define('WP_MEMORY_LIMIT', $_ENV['WP_MEMORY_LIMIT'] ?? '256M');
define('FS_METHOD',       $_ENV['FS_METHOD']       ?? 'direct');

// ===============================
// URLs (optional overrides)
// ===============================
if (!empty($_ENV['WP_HOME'])) {
    define('WP_HOME', $_ENV['WP_HOME']);
}
if (!empty($_ENV['WP_SITEURL'])) {
    define('WP_SITEURL', $_ENV['WP_SITEURL']);
}

// ===============================
// WordPress bootstrap
// ===============================
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
