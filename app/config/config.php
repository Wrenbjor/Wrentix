<?php

return new \Phalcon\Config(array(
	'database' => array(
		'adapter'  => 'Mysql',
		'host'     => '192.168.56.101',
		'username' => 'wrentix_admin',
		'password' => '#T1x@dm1n#',
		'name'     => 'wrentix',
	),
	'application' => array(
		'controllersDir' => __DIR__ . '/../../app/controllers/',
		'modelsDir'      => __DIR__ . '/../../app/models/',
		'viewsDir'       => __DIR__ . '/../../app/views/',
		'pluginsDir'     => __DIR__ . '/../../app/plugins/',
		'libraryDir'     => __DIR__ . '/../../app/library/',
		'baseUri'        => '/wrentix/',
	),
	'models' => array(
		'metadata' => array(
			'adapter' => 'Memory'
		)
	)
));
