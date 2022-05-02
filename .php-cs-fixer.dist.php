<?php

declare(strict_types=1);

/**
 * File used in the `--config=` parameter because without config file PHP-CS-Fixer does
 * not accept multiple paths.
 *
 * I don't know why or if it's a bug. It seems that will not work in future v3 because
 * passing a `--rules` option and a `--config` option is deprecated.
 */
require_once __DIR__.'/tools/php-cs-fixer/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create();

$config = new PhpCsFixer\Config();
$config->setFinder($finder);

return $config;
