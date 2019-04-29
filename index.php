<?php

namespace HTL3R\RPS;

require('vendor/autoload.php');



$text = "ROCK PAPER SCISSORS";
$view = new \TYPO3Fluid\Fluid\View\TemplateView();
$paths = $view->getTemplatePaths();
$paths->setTemplatePathAndFilename(__DIR__ . '/Templates/Game.html');


$view->assignMultiple([

    'text' => $text
]);


$output = $view->render();
echo $output;