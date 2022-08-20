<?php

require __DIR__ . '/vendor/autoload.php';

viewi()->init();

viewi()->get('/', Components\Views\Counter\Counter::class);
viewi()->get('/counter', Components\Views\Counter\Counter::class);

viewi()->compile();

app()->get('/home', function () {
	response()->page('./welcome.html');
});

app()->run();
