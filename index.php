<?php

require_once __DIR__ . '/config.php';

$pdo = new \Pdo(sprintf(
    'mysql:host=%s;dbname=%s',
    $dbHost,
    $dbName
), $dbUser, $dbPwd);
