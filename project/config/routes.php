<?php

Router::addRoute(['GET', 'POST'], '/overlapping/data', 'App\Controller\ControllerOverlapping@data');
Router::addRoute(['GET', 'POST'], '/overlapping/value-a', 'App\Controller\ControllerOverlapping@value_a');
Router::addRoute(['GET', 'POST'], '/overlapping/value-b', 'App\Controller\ControllerOverlapping@value_b');
Router::addRoute(['GET', 'POST'], '/overlapping/value-c', 'App\Controller\ControllerOverlapping@value_c');

Router::addRoute(['GET', 'POST'], '/concurrency/data', 'App\Controller\ControllerConcurrency@data');
Router::addRoute(['GET', 'POST'], '/concurrency/value-a', 'App\Controller\ControllerConcurrency@value_a');
Router::addRoute(['GET', 'POST'], '/concurrency/value-b', 'App\Controller\ControllerConcurrency@value_b');
Router::addRoute(['GET', 'POST'], '/concurrency/value-c', 'App\Controller\ControllerConcurrency@value_c');
