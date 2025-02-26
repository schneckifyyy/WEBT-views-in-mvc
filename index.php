<?php
require_once 'vendor/autoload.php';

$template = fread(fopen('index.html', 'r'), filesize('index.html'));

$tempReplaced = str_replace("###Hotel1Name###", "Hotel1", $template);

echo $tempReplaced;