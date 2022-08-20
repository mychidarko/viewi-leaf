<?php

require __DIR__ . '/vendor/autoload.php';

viewi()->init();

app()->get('/home', function () {
	response()->page('./welcome.html');
});

app()->run();
