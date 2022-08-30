<?php

$finder = (new PhpCsFixer\Finder())
    ->in('src')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        '@PSR12' => true,
        'yoda_style' => false,
        'trailing_comma_in_multiline' => ['elements' => ['parameters']],
    ])
    ->setFinder($finder)
    ;
