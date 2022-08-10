<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/viewi.php';
// require __DIR__ . '/components/Layout/Main.php';
require __DIR__ . '/components/Home/Home.php';

viewi()->init();

app()->get('/', function () {
	response()->page('./welcome.html');
});

app()->get('/app', viewi()->route(Home::class));

app()->run();
