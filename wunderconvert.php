<?php
declare(strict_types=1);

require_once(__DIR__ . "/vendor/autoload.php");

$application = new Symfony\Component\Console\Application("WunderConvert", "1.2.3");
$application->add(new Wunderkraut\Command\ConvertCommand());
$application->run();
