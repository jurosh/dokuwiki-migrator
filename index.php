<?php


use jurosh\migrate\dokuwiki\WikiMigrator as WikiMigrator;
//use jurosh\migrate\dokuwiki\WikiInterface as WikiInter;
//require_once __DIR__ . '\..\vendor\autoload.php';
require_once 'src/loader.php';

$user = new WikiMigrator();

$user->Transform("C:\Program Files\wamp\www\dokuwiki", "http://localhost/dokuwiki/doku.php?id=");
