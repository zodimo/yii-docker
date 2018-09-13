<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.

Yii::setPathOfAlias('zodimo', dirname(__FILE__).'/../../../vendor/zodimo');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
        'awsSdk'=>array(
            'class'=>'zodimo.yii-aws-sdk.AwsSdk',
            'sharedConfig'=>array(
                'region' => 'us-east-1',
                'credentials' => [ //you can use a different method to grant access
                    'key' => 'your-aws-key',
                    'secret' => 'your-aws-secret',
                ],

            ),
        )

	),
);
