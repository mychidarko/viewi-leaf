<?php

use Viewi\PageEngine;

function ReadComponentsInfo(PageEngine $pageEngine)
{
    $pageEngine->setComponentsInfo(array (
  'Counter' => 
  array (
    'Name' => 'Counter',
    'Namespace' => 'Components\\Views\\Counter',
    'ComponentName' => 'Counter',
    'Tag' => 'Counter',
    'FullPath' => '/Views/Counter/Counter.php',
    'TemplatePath' => '/Views/Counter/Counter.html',
    'BuildPath' => '/Views/Counter/Counter.php',
    'RenderFunction' => 'RenderCounter',
    'IsComponent' => true,
    'HasInit' => false,
    'HasMounted' => false,
    'HasBeforeMount' => false,
    'HasVersions' => false,
    'Relative' => true,
    'Instance' => NULL,
  ),
  'CssBundle' => 
  array (
    'Name' => 'CssBundle',
    'Namespace' => 'Viewi\\Components\\Assets',
    'ComponentName' => 'CssBundle',
    'Tag' => 'CssBundle',
    'FullPath' => '/Users/mychidarko/Projects/leafphp/examples/viewi-app/vendor/viewi/viewi/src/Viewi/Components/Assets/CssBundle.php',
    'TemplatePath' => '/Users/mychidarko/Projects/leafphp/examples/viewi-app/vendor/viewi/viewi/src/Viewi/Components/Assets/CssBundle.html',
    'IsComponent' => true,
    'HasInit' => false,
    'HasMounted' => false,
    'HasBeforeMount' => false,
    'HasVersions' => true,
    'Relative' => false,
    'Versions' => 
    array (
    ),
    'Instance' => NULL,
  ),
  'HttpClient' => 
  array (
    'Name' => 'HttpClient',
    'Namespace' => 'Viewi\\Common',
    'FullPath' => '/Users/mychidarko/Projects/leafphp/examples/viewi-app/vendor/viewi/viewi/src/Viewi/Common/HttpClient.php',
    'IsComponent' => false,
    'HasInit' => false,
    'HasMounted' => false,
    'HasBeforeMount' => false,
    'Relative' => false,
    'Dependencies' => 
    array (
      'asyncStateManager' => 
      array (
        'name' => 'AsyncStateManager',
      ),
    ),
    'Instance' => NULL,
  ),
  'AsyncStateManager' => 
  array (
    'Name' => 'AsyncStateManager',
    'Namespace' => 'Viewi\\Components\\Services',
    'FullPath' => '/Users/mychidarko/Projects/leafphp/examples/viewi-app/vendor/viewi/viewi/src/Viewi/Components/Services/AsyncStateManager.php',
    'IsComponent' => false,
    'HasInit' => false,
    'HasMounted' => false,
    'HasBeforeMount' => false,
    'Relative' => false,
    'Instance' => 
    array (
    ),
  ),
  'ViewiScripts' => 
  array (
    'Name' => 'ViewiScripts',
    'Namespace' => 'Viewi\\Components\\Assets',
    'ComponentName' => 'ViewiScripts',
    'Tag' => 'ViewiScripts',
    'FullPath' => '/Users/mychidarko/Projects/leafphp/examples/viewi-app/vendor/viewi/viewi/src/Viewi/Components/Assets/ViewiScripts.php',
    'TemplatePath' => '/Users/mychidarko/Projects/leafphp/examples/viewi-app/vendor/viewi/viewi/src/Viewi/Components/Assets/ViewiScripts.html',
    'BuildPath' => '/Viewi/Components/Assets/ViewiScripts.php',
    'RenderFunction' => 'RenderViewiScripts',
    'IsComponent' => true,
    'HasInit' => false,
    'HasMounted' => false,
    'HasBeforeMount' => false,
    'HasVersions' => false,
    'Relative' => false,
    'Dependencies' => 
    array (
      'httpClient' => 
      array (
        'name' => 'HttpClient',
      ),
      'asyncStateManager' => 
      array (
        'name' => 'AsyncStateManager',
      ),
    ),
    'Instance' => NULL,
  ),
  'IHttpContext' => 
  array (
    'Name' => 'IHttpContext',
    'Namespace' => 'Viewi\\WebComponents',
    'FullPath' => '',
    'IsComponent' => false,
    'HasInit' => false,
    'HasMounted' => false,
    'HasBeforeMount' => false,
    'Instance' => 
    array (
    ),
  ),
));   
}
