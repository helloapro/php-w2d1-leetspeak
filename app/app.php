<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Leetspeak.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

        return $app['twig']->render('l33tform.html.twig');
    });

    $app->get("/l33t3d", function() use ($app) {
        $my_Leetspeak = new Leetspeak;
        $l33t3dPhrase = $my_Leetspeak->makeLeetspeak($_GET['phrase']);

        return $app['twig']->render('l33t3d.html.twig', array('result' => $l33t3dPhrase));
    });

    return $app;
?>
