<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 2014/09/23
 * Time: 0:26
 */
Environment::configure('development',true,[
	'MYSQL_DB_HOST' => 'localhost',
	'MYSQL_USERNAME' => 'webapp',
	'MYSQL_PASSWORD' => 'passw0rd',
	'MYSQL_DB_NAME' => 'blog',
	'MYSQL_TEST_DB_NAME' => 'test_blog',
	'MYSQL_PREFIX' => '',
],function() {
	CakePlugin::load('Bdd');
});