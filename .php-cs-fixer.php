<?php
/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:3.0.0|configurator
 * you can change this configuration by importing this file.
 */
$config = new PhpCsFixer\Config();

return $config
    ->setRules([
        '@DoctrineAnnotation'       => true,
        '@PHP54Migration'           => true,
        '@PHP70Migration'           => true,
        '@PHP71Migration'           => true,
        '@PHP73Migration'           => true,
        '@PHP74Migration'           => true,
        '@PHP80Migration'           => true,
        '@PSR1'                     => true,
        '@PSR12'                    => true,
        '@PSR2'                     => true,
        '@PhpCsFixer'               => true,
        '@Symfony'                  => true,
        '@PHP56Migration:risky'     => false,
        '@PHP70Migration:risky'     => false,
        '@PHP71Migration:risky'     => false,
        '@PHP74Migration:risky'     => false,
        '@PHP80Migration:risky'     => false,
        '@PHPUnit30Migration:risky' => false,
        '@PHPUnit32Migration:risky' => false,
        '@PHPUnit35Migration:risky' => false,
        '@PHPUnit43Migration:risky' => false,
        '@PHPUnit48Migration:risky' => false,
        '@PHPUnit50Migration:risky' => false,
        '@PHPUnit52Migration:risky' => false,
        '@PHPUnit54Migration:risky' => false,
        '@PHPUnit55Migration:risky' => false,
        '@PHPUnit56Migration:risky' => false,
        '@PHPUnit57Migration:risky' => false,
        '@PHPUnit60Migration:risky' => false,
        '@PHPUnit75Migration:risky' => false,
        '@PHPUnit84Migration:risky' => false,
        '@PSR12:risky'              => false,
        '@PhpCsFixer:risky'         => false,
        '@Symfony:risky'            => false,
        'binary_operator_spaces'    => [
            'default' => 'align_single_space_minimal',
        ],
    ])
    ->setFinder(PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__)
    )
;
