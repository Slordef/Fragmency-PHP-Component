<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/slordef/FragmencyCore/src/FragmencyError.php';
require __DIR__ . '/../vendor/slordef/FragmencyFiles/src/FilesManager.php';
require __DIR__ . '/../vendor/slordef/FragmencyFiles/src/Files.php';
require __DIR__ . '/../vendor/slordef/FragmencyController/src/ControllerManager.php';
require __DIR__ . '/../vendor/slordef/FragmencyController/src/Controller.php';
require_once __DIR__ . '/../vendor/slordef/FragmencyRouter/src/RoutesManager.php';
require_once __DIR__ . '/../vendor/slordef/FragmencyRouter/src/Route.php';
require_once __DIR__ . '/../vendor/slordef/FragmencyRouter/src/Routes.php';
require_once __DIR__ . '/../vendor/slordef/FragmencyRouter/src/Router.php';
require_once __DIR__ . '/../vendor/slordef/FragmencyCore/src/Application.php';
require_once __DIR__ . '/../vendor/slordef/FragmencyCore/src/Fragmency.php';
require_once __DIR__ . '/../vendor/slordef/FragmencyCore/src/Page.php';
require_once __DIR__ . '/../vendor/slordef/FragmencyCore/src/Request.php';
require_once __DIR__ . '/../vendor/slordef/FragmencyCore/src/Response.php';
require_once __DIR__ . '/../vendor/slordef/FragmencyCore/src/Caller.php';
use \Fragmency\Core\Fragmency;

$Fragmency = new Fragmency();
$Fragmency->launch();