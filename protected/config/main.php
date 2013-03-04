<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Yii-CMS',
    'theme'=>'boot', // requires you to copy the theme under your themes directory
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=> require_once 'import.php',
	'modules'=> require_once 'modules.php',
	'components'=>require_once 'components.php', // application components
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=> require_once 'params.php',
);