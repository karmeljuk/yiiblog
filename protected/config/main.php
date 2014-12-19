<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Test Yii Blog',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

  'defaultController'=>'post',

'aliases' => array(
),
'modules'=>array(

    'comment'=>array(
      'class'=>'ext.comment-module.CommentModule',
      'commentableModels'=>array(
          'post'=>'Post'
      ),
      'userModelClass'=>'User',
      'userNameAttribute'=>'username',
      'userEmailAttribute'=>'email',
  ),
),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		'db'=>array(
      'connectionString'=>'sqlite:'.dirname(__FILE__).'/../data/blog.db',
      'tablePrefix'=>'tbl_',
    ),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
    'urlManager'=>array(
      'urlFormat'=>'path',
      'rules'=>array(
        'post/<id:\d+>/<title:.*?>'=>'post/view',
        'posts/<tag:.*?>'=>'post/index',
        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
      ),
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
    'postsPerPage'=>10,
    'copyrightInfo'=>'Copyright &copy; 2014 | My Super Yii Blog.',
	),

  // installing Gii
  'import'=>array(
    'application.models.*',
    'application.components.*',
  ),

  'modules'=>array(
      'gii'=>array(
          'class'=>'system.gii.GiiModule',
          'password'=>'123456',
      ),
  ),
);
