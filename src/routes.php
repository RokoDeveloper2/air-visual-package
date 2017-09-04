<?php
$routes = [
    'metadata',
    'getNearestCity',
    'getCity'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

