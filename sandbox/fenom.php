<?php

require_once __DIR__.'/../src/Fenom.php';
require_once __DIR__.'/../tests/tools.php';

\Fenom::registerAutoload();

$fenom = Fenom::factory(__DIR__.'/templates', __DIR__.'/compiled');
$fenom->setOptions(Fenom::AUTO_RELOAD);
var_dump($fenom->compileCode('{$b == 5 ? "5" : "?"}')->getBody());
//$fenom->display("blocks/second.tpl", []);
// $fenom->getTemplate("problem.tpl");