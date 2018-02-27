<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Tests')
    ->in('./src')
;

return new Sami($iterator, array(
    'title'                => 'Dotpayds API',
    'build_dir'            => __DIR__.'/docs',
    'cache_dir'            => __DIR__.'/var/cache',
    'default_opened_level' => 2,
));