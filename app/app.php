<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('game.html.twig');
    });

    $app->get("/result", function() use ($app) {
        $game = new RockPaperScissors;
        $game_result = $game->playRockPaperScissors($_GET['input1'], $_GET['input2']);
        return $app['twig']->render('result.html.twig', array('result' => $game_result));
    });

    return $app;

?>
