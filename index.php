<?php

/* pierwszy plik uruchamiany na serwerze */

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/'); /*to co podajemy w pasku url -> to wysyła nam tutaj przeglądarka */
$path = parse_url( $path, PHP_URL_PATH);

/*ustawiamy mozliwe ścieżki*/
Routing::get('index', 'DefaultController');
Routing::get('login', 'DefaultController');
Routing::get('register','DefaultController');
Routing::get('tables', 'DefaultController');

Routing::get('board', 'DefaultController');
Routing::get('account', 'DefaultController');
Routing::get('calculators', 'DefaultController');
Routing::get('calc_molar_mass', 'DefaultController');


/* akcje */
Routing::post('logowanie', 'SecurityController');
Routing::post('rejestracja', 'SecurityController');







//dla kalkulatora
Routing::get('seeAllCalculators', 'CalculatorController');
Routing::get('likeSelectCalculator', 'CalculatorController');
Routing::get('dislikeSelectCalculator', 'CalculatorController');



//dla tablicy
Routing::get('seeAllTables', 'TableController');
Routing::get('likeSelectTable', 'TableController');
Routing::get('dislikeSelectTable', 'TableController');



//dla board
Routing::get('seeUserBoard', 'BoardController');



/*odpalamy właściwą scieżkę wysłaną przez przeglądarkę*/
Routing::run($path);