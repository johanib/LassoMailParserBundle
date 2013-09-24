<?php
$autoloadLocations = [
    __DIR__ . '/../../../../../autoload.php',
    __DIR__ . '/../vendor/.composer/autoload.php'
];

$autoloadLocation = '';

foreach ($autoloadLocations as $location) {
    if (file_exists($location)) {
        $autoloadLocation = $location;
        break;
    }
}

if (empty($autoloadLocation)) {
    throw new \LogicException('Could not find ' . $autoloadLocation . '.');
}

require $autoloadLocation;
