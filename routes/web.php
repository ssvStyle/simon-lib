<?php

/**
 * This is a routes file.
 * The route and controller@method can be set in the format
 *$route->uri('foo/bar', 'Controller@method');
 *
 *
 * GET and POST params will be added
 * and available in the controller
 * automatically in the variable $this->data['get']|$this->data['post']...
 *
 */

$route->uri('/', 'Home@index');
$route->uri('home', 'Home@index');
$route->uri('register', 'Auth\Authorization@register');
$route->uri('login', 'Auth\Authorization@login');
$route->uri('logout', 'Auth\Authorization@logout');











?>



