<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('game.html.twig');
    });

    $app->get("/result", function() use ($app) {
        $game = new RockPaperScissors;
        $game_result = $game->playRockPaperScissors($_GET['input1'], $_GET['input2']);
        $input1 = $_GET['input1'];
        $input2 = $_GET['input2'];
        $weapons = "Player one chose $input1 and player two chose $input2.";
        $game_results = array();
        array_push($game_results, $game_result, $weapons);
        return $app['twig']->render('result.html.twig', array('results' => $game_results));
    });

    return $app;

?>
