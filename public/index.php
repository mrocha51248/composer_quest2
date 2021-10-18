<?php

require_once __DIR__ . "/../vendor/autoload.php";

$bessie = new CowSay\Cow('Hello, Farm!');

$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');

echo $bessie;
