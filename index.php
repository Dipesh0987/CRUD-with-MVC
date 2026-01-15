<?php
require 'vendor/autoload.php';
include 'app/controllers/employee_controller.php';

use Jenssegers\Blade\Blade;

$blade = new Blade('app/views', 'cache');
$data = handleEmployeeRequest();

echo $blade->render($data['view'], $data);