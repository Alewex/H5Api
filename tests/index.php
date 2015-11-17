<?php

// Require composer's autoload file.
require '../vendor/autoload.php';

$halo = new H5Api\HaloAPI('b6fbbdbe541444c5824e3cb1e74f313b');

$naded = $halo->player('naded');
$goofy = $halo->player('g00fy');

$nadedEmblem = $naded->profile->getEmblem(190);
$goofyEmblem = $goofy->profile->getEmblem(190);

$nadedMatches = $naded->matches->getMatches();
$goofyMatches = $goofy->matches->getMatches();

echo <<<EOF
	<img src="{$nadedEmblem}" alt="{$naded->gamertag}"></img>
	<img src="{$goofyEmblem}" alt="{$goofy->gamertag}"></img>
EOF;
