<?php

// Require composer's autoload file.
require '../vendor/autoload.php';

$halo = new H5Api\HaloAPI('b6fbbdbe541444c5824e3cb1e74f313b');

$nadedProfile = $halo->profile('naded');

var_dump($nadedProfile->getEmblem());
