<?php

use App\Controllers;

/**
 * 
 * Inspired by Laravel Route file here we define the endpoints, the controllers and the methods responsible for these endpoints. 
 */

/**
 * Example
 *  '/website/path' => [Controllers\NameOfControllerClass::class, 'NameOfControllerMethod']
 */


return [
    // Example Route
    '/' => [Controllers\BaseController::class, 'home']
];

?>