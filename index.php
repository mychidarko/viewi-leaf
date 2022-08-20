<?php

use Components\Views\Counter\Counter;

require __DIR__ . '/vendor/autoload.php';

viewi()->init();

viewi()->get('/', Counter::class);

viewi()->compile();

app()->get('/', function () {
	response()->page('./welcome.html');
});

app()->run();
