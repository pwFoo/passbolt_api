<?php
/**
 * Main application configuration file
 *
 * @copyright    Copyright 2012, Passbolt.com 
 * @license      http://www.passbolt.com/license
 * @package      app.Config.app
 * @since        version 2.12.7
 */
$config = array(
	// General App Details
	'App.name' => 'Passbolt',
	'App.punchline' => 'The simple password management system',
	'App.copyright' => '2012 &copy; Passbolt.com',
	'App.title' => '%s | Passbolt', // %s = title_for_layout
	'App.version'	 => array(
		'number' => '2.12.9',
		'name' => 'What\'s hapenin\'',
		'song' => 'http://youtu.be/DaRG0ukxYqQ'
	),
	// Internationalization
	'i18n' => array(
		'locale' => 'en-EN',
		'language' => 'en',
		'timezone' => 'GTM+1',
		'dictionary' => 'jsDictionary' // default dictionary file name
	),
	// Authentication & Authorisation
	'Auth' => array(
    'authenticate' => array(
			'BcryptForm', // good encryption
		  //'Form' // bad encryption
		),
		'loginRedirect' => '/login',
		'logoutRedirect' => '/login',
		'loginAction' => array('controller' => 'Users', 'action' => 'login'),
		'whitelist' => array(
			'users' => array('login' => true, 'logout' => true)
		),
		'bcrypt' => array(
			'cost' => '04',
			'salt' => 'jdwmlckzlfwsl123wldcaxss',
			'hmac' => 'odqw1AEN9fskDeWDqwodiqwd213109icjalkdnasdjjqd'
		)
	)
);