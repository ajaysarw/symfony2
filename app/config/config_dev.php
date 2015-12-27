<?php

$this->import('parameters.ini');
$this->import('security.yml');
$this->import('services.yml');

$container->loadFromExtension('framework', array(
    'secret'          => '%secret%',
    'charset'         => 'UTF-8',
    'router'          => array('resource' => '%kernel.root_dir%/config/routing.php'),
    'form'            => array(),
    'csrf-protection' => array(),
    'validation'      => array('annotations' => true),
    'templating'      => array(
        'engines' => array('twig'),
        #'assets_version' => "SomeVersionScheme",
    ),
    'session' => array(
        'default_locale' => "%locale%",
        'auto_start'     => true,
    ),
));

// Twig Configuration
$container->loadFromExtension('twig', array(
    'debug'            => '%kernel.debug%',
    'strict_variables' => '%kernel.debug%',
));






