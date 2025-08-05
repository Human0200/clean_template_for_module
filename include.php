<?php

use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses('leadspace.parsercsv', [
    'Settings24\GlobalSettings' => 'lib/classes/settings.php',

]);
?>