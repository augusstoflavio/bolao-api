<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$host = isset($url["host"]) ? $url["host"] : "";
$username = isset($url["user"]) ? $url["user"] : "";
$password = isset($url["pass"]) ? $url["pass"] : "";
$database = substr($url["path"], 1);

return [
    'default' => env('DB_CONNECTION', 'heroku'),
    'connections' => [
        'heroku' => [
            'driver' => 'mysql',
            'host' => $host,
            'database' => $database,
            'username' => $username,
            'password' => $password,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ],
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', 3306),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => env('DB_PREFIX', ''),
            'strict' => env('DB_STRICT_MODE', true),
            'engine' => env('DB_ENGINE', null),
            'timezone' => env('DB_TIMEZONE', '+00:00'),
        ],
    ],
    'migrations' => 'migrations',
];
