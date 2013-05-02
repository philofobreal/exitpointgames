<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Exitpoint',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'ext.giix-components.*', // giix components 
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Naszta82',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths' => array(
                            'ext.giix-core', // giix generators
                        ),
		),
		
	),

	// application components
	'components'=>array(
		/* 'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		), */
                'user'=>array(
                    'class' => 'WebUser',
                ),
            
                // uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
                        ),
		),           
		
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		//For local dev
                /*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=exitsite',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '111111',
			'charset' => 'utf8',
                        'autoCommit' => false
		),
                */
            
                // For dotroll live
                'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ukmako_exitsite',
			'emulatePrepare' => true,
			'username' => 'ukmako',
			'password' => 'epg120607',
			'charset' => 'utf8',
		),
                
                //For dotroll dev
		/* 'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=hdmtrr_exitsite',
			'emulatePrepare' => true,
			'username' => 'hdmtrr',
			'password' => 'Naszta82',
			'charset' => 'utf8',
		),*/
                /*
                //For csupi dev
                'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=exitpoint_db1',
			'emulatePrepare' => true,
			'username' => 'exitpoint_db1_u1',
			'password' => 'iQxoNPLX',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);