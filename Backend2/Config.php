<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) 
define('DB_SERVER', 'mati.engr.utk.edu');
define('DB_USERNAME', 'dfryt');
define('DB_PASSWORD', 'dfryt@421');
define('DB_NAME', 'dfryt');
 
/* Attempt to connect to MySQL database 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);  /* ERROR HERE, CHECK 
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} */



$configuration = [
    'settings' => [
        'displayErrorDetails' => true
    ]
];


$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

$container = $app->getContainer();
$container['pdo'] = function ($c) {
    $dsn = 'mysql:host=mati.engr.utk.edu;dbname=dfryt; port=33060;charset=utf8'; // replace Localhost with your mysql host ip and replace dbName with your database name
    $usr = 'dfryt'; //replace dbUSERNAME with your database username
    $pwd = 'dfryt@421'; //replace dbUSERNAME with your database password
    $pdo = new \Slim\PDO\Database($dsn, $usr, $pwd);
    return $pdo;
};

//$app = new Slim\App();

$routeFiles = (array) glob('Backend2/*.php');
foreach($routeFiles as $routeFile) {
    require_once $routeFile;
}

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

// CORS
$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
        ->withHeader('Access-Control-Allow-Origin', 'http://127.0.0.1:5500')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

$app->run();


?> 