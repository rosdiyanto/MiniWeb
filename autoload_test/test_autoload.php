<?php

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
    echo "Autoload file included.<br>";
} else {
    echo "Autoload file not found.<br>";
    exit;
}

use Rosdiyanto\MiniWeb\ExampleClass;

echo "Namespace and class loaded.<br>";

$example = new ExampleClass();
echo $example->sayHello();
