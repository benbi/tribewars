<?php
// More info, check: http://www.yiiframework.com/doc/cookbook/59/
// http://www.yiiframework.com/forum/index.php?/topic/8372-help-test-gii-a-web-based-code-generator/

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

global $root;
global $rootApp;

$root = dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'';
$rootApp = dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'protected';

return CMap::mergeArray(
    array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'Arakiri | Gamerbreed',
		'aliases'=>array(
	    	'root'=>$rootApp
		),
	
		// autoloading model and component classes
		'import'=>array(
			'root.components.*',
			'root.models.*',
			'application.components.*',
		),
	
		// application-level parameters that can be accessed
		// using Yii::app()->params['paramName']
		'params'=>require('params.php'),
	),
    require($rootApp.'/config/main.php')
);