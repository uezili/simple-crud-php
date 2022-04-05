<?php

define('DB_NAME', 'hp_crud');
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$dbConnection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=' . DB_PORT, DB_USER, DB_PASSWORD);
