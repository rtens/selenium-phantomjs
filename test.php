<?php

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;

require_once 'vendor/autoload.php';

echo "Test started" . PHP_EOL;

$driver = RemoteWebDriver::create('http://localhost:4444/wd/hub', [WebDriverCapabilityType::BROWSER_NAME => 'phantomjs']);

$driver->get('http://localhost:8000');

echo "------- RESULT --------" . PHP_EOL;
var_dump($driver->getPageSource());