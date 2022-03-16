<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';

whatIsHappening();


$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);
$cards = $cardRepository->get();
var_dump($cards);

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
$action = $_GET['action'] ?? null;

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)



switch ($action) {
    case 'create':
        require "create.php";
        create($databaseManager);
        break;
    default:
    require "overview.php";
        break;
}

function overview($databaseManager)
{
    // Load your view
    // Tip: you can load this dynamically and based on a variable, if you want to load another view
    $cardRepository = new CardRepository($databaseManager);
    $cards = $cardRepository->get();
    require 'overview.php';
}

function create($databaseManager)
{
    $cardRepository = new CardRepository($databaseManager);
    $cards = $cardRepository->create();
}


function pre_r($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    pre_r($_GET);
    echo '<h2>$_POST</h2>';
    pre_r($_POST);
    echo '<h2>$_COOKIE</h2>';
    pre_r($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    pre_r($_SESSION);
};

