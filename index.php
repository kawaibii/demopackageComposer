<?php
require __DIR__ . '/vendor/autoload.php';

use App\Models\User;
use App\Controllers\HomeController;

$user = new user();

$user->index();

$homeController = new HomeController();
$homeController->getAll();
