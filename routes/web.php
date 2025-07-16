<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

//HOME
$router->get('/', function () {
	return view('home');
});

//QUOTES GENERATOR
$router->get('/quotes-generator', function () {
	return view('quotes-generator.index');
});

$router->post('/quotes-generator/counter', function () {
	$file = 'db/q-g.txt'; // path to text file that stores counts
	$fh = fopen($file, 'r+');
	$id = $_REQUEST['id']; // posted from page
	$lines = '';
	while (!feof($fh)) {
		$line = explode('||', fgets($fh));
		$item = trim($line[0]);
		@$num = trim($line[1]);
		if (!empty($item)) {
			if ($item == $id) {
				$num++; // increment count by 1
				echo $num;
			}
			$lines .= "$item||$num\r\n";
		}
	}
	file_put_contents($file, $lines);
	fclose($fh);
});

// BERAT BADAN Ideal
$router->get('/berat-ideal', function () {
	return view('berat-ideal.index');
});

$router->post('/berat-ideal', function () {
	return view('berat-ideal.index');
});

// ALAY GENERATOR
$router->get('/alay-gen', function () {
	return view('alay-gen.index');
});

$router->post('/alay-gen', function () {
	return view('alay-gen.index');
});

$router->post('/alay-gen/counter', function () {
	$file = 'db/a-g.txt'; // path to text file that stores counts
	$fh = fopen($file, 'r+');
	$id = $_REQUEST['id']; // posted from page
	$lines = '';
	while (!feof($fh)) {
		$line = explode('||', fgets($fh));
		$item = trim($line[0]);
		@$num = trim($line[1]);
		if (!empty($item)) {
			if ($item == $id) {
				$num++; // increment count by 1
				echo $num;
			}
			$lines .= "$item||$num\r\n";
		}
	}
	file_put_contents($file, $lines);
	fclose($fh);
});

//TEST GANTENG
$router->get('/test-ganteng', function () {
	return view('test-ganteng.index');
});

$router->post('/test-ganteng', function () {
	return view('test-ganteng.index');
});

// health check 
$router->get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => date('Y-m-d H:i:s'),
    ]);
});
