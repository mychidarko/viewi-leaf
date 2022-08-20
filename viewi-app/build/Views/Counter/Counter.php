<?php

use Viewi\PageEngine;
use Viewi\BaseComponent;

function RenderCounter(
    Components\Views\Counter\Counter $_component,
    PageEngine $pageEngine,
    array $slots
    , ...$scope
) {
    $slotContents = [];
    
    $_content = '';

    $_content .= '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <button class="mui-btn mui-btn--accent">-</button>
    <span class="mui--text-dark mui--text-title">';
    $_content .= htmlentities($_component->count ?? '');
    $_content .= '</span>
    <button class="mui-btn mui-btn--accent">+</button>

    ';
    $slotContents[0] = false;
    $pageEngine->putInQueue($_content);
    $pageEngine->renderComponent('ViewiScripts', [], $_component, $slotContents, [], ...$scope);
    $slotContents = [];
    $_content = "";
    $_content .= '
</body>
</html>
';
    return $_content;
   
}
