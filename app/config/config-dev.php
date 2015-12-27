<?php










// app/config/routing.php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('yo yo', new Route('/', array(
    '_controller' => 'AppBundle:Main:homepage',
)));

$collection->add('blog', new Route('/blog/{page}', array(
    '_controller' => 'AppBundle:Blog:index',
    'page'        => 1,
)));

$collection->add('blog_show', new Route('/blog/{show}', array(
    '_controller' => 'AppBundle:Blog:show',
)));

$collection->add('db_show', new Route('/db/{slug}', array(
    '_controller' => 'AppBundle:Db:show',
)));
