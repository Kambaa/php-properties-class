<?php
require 'Properties.php';
$p = new Properties();

// Read from string (from array and file handle is possible too):
$p->load(file_get_contents('site.properties'));

// Get associative array of all loaded properties:
$config = $p->toArray();
var_dump($config);
// Get a single property's value:
// $email_from = $p->getProperty('wasd');

// Set a property:
//$p->setProperty('email.from', 'no-reply@server.com');
//$p->setProperty('email.to', 'your-mother@server.com');
//$config = $p->toArray();
//var_dump($config);
// Remove a property:
//$p->remove('email.from');
//$config = $p->toArray();
//var_dump($config);
// Save properties method 1:
//$p->store('site.properties');

// Save properties method 2:
// file_put_contents('site.properties', $p->toString());

// Save properties method 3 (includes comments and blanks):
// file_put_contents('site.properties', $p->toString(true));