<?php
define('INI_FILE', __DIR__.'/../config.ini');
require(__DIR__.'/../app/autoload.php');
require(__DIR__.'/../vendor/tipy/tipy/Tipy.php');

Tipy::run();
