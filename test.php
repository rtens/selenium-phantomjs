<?php

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;

require_once 'vendor/autoload.php';

echo "Test started" . PHP_EOL;

$driver = RemoteWebDriver::create('http://127.0.0.1:4444/wd/hub', [WebDriverCapabilityType::BROWSER_NAME => 'phantomjs']);

$driver->get('http://127.0.0.1:8000/index.php');

echo "------- RESULT --------" . PHP_EOL;
var_dump($driver->getPageSource());