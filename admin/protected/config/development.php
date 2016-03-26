<?php
// More info, check: http://www.yiiframework.com/doc/cookbook/59/
// http://www.yiiframework.com/forum/index.php?/topic/8372-help-test-gii-a-web-based-code-generator/

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return CMap::mergeArray(
    array(
		'components'=>array(
			'db'=>array(
				'connectionString' => 'mysql:host=127.0.0.1;dbname=gamerbreed',
		      	'emulatePrepare' => true,
		      	'username' => 'root',
		      	'password' => '',
				'charset' => 'utf8',
				'tablePrefix' => 'gb_',
			),
			'log' => array(
				'class' => 'CLogRouter',
				'routes' => array(
					/* array(
						'class' => 'CFileLogRoute',
						'levels' => 'error, warning',
					), */
					array(
						'class' => 'CWebLogRoute',
						'levels' => 'info, warning, error',
					),
					/* array(
						'class' => 'CDbLogRoute',
						'levels' => 'trace, info, warning, error',
						'connectionID' => 'db',
						'autoCreateLogTable' => true,
					), */
				),
			),
		),
	),
    require('self.php')
);