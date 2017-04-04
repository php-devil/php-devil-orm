<?php
require dirname(__DIR__) . '/vendor/autoload.php';
require __DIR__ . '/models/_connection.config.php';
require __DIR__ . '/models/classes/PagesStructure.php';

\PhpDevil\Common\Configurator\Loader::getInstance()->enableFileCaching(__DIR__ . '/cache');

$select = new \PhpDevil\ORM\providers\RecordSet([
    'model'   => PagesStructure::class,
    'query'   => PagesStructure::findAll(['id', 'name', 'parent_url' => 'parent.url', 'parent_name' => 'parent.name']),
]);

echo '<pre>';
print_r($select);


