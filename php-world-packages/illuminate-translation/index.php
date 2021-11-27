<?php

use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;
use Illuminate\Filesystem\Filesystem;

require_once '../vendor/autoload.php';

$loader = new FileLoader(new Filesystem(), './lang');

$transEnglish = new Translator($loader, "en");

$transDutch = new Translator($loader, "nl");

echo "<h1>Translations</h1><pre>";
echo "English: " . $transEnglish->get('talk.conclusion') . "\n";
echo "Dutch:   " . $transDutch->get('talk.conclusion');