<?php

use Doctum\Doctum;
use Doctum\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__ . '/src'); // Chemin vers ton code source

$versions = GitVersionCollection::create(__DIR__)
    ->addFromTags('v*')
    ->add('main', 'Main branch');

return new Doctum($iterator, [
    'title' => 'Documentation MVC-PHP',
    'build_dir' => __DIR__ . '/docs',
    'cache_dir' => __DIR__ . '/cache',
    'source_dir' => __DIR__ . '/src',
    'default_opened_level' => 2,
    'build_namespace' => true,
    'theme' => 'responsive',
    'versions' => $versions,
]);
