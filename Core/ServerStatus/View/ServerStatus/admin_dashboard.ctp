<?php
$devIcons = array(
	array(
		'name' => 'Status',
		'description' => 'Check on the health of your setup',
		'icon' => '/server_status/img/icon.png',
		'author' => 'Infinitas',
		'dashboard' => array('controller' => 'server_status', 'action' => 'status'),
	),
	array(
		'name' => 'Php',
		'description' => 'See and manage your Php configuration',
		'icon' => '/server_status/img/php.png',
		'author' => 'Infinitas',
		'dashboard' => array('controller' => 'php', 'action' => 'info'),
	),
	array(
		'name' => 'MySQL',
		'description' => 'Information regarding the MySQL server currently running',
		'icon' => '/server_status/img/mysql.png',
		'author' => 'Infinitas',
		'dashboard' => array('controller' => 'databases', 'action' => 'mysql'),
	),
	array(
		'name' => 'Cache',
		'description' => 'Clear all cached data',
		'icon' => '/server_status/img/cache.png',
		'author' => 'Infinitas',
		'dashboard' => array('controller' => 'server_status', 'action' => 'cache_status'),
	)
);

echo $this->Html->tag('div', implode('', array(
	$this->Html->tag('h1', __d('server_status', 'Manage your server')),
	$this->Design->arrayToList(current((array)$this->Menu->builDashboardLinks($devIcons, 'server_status')), array('ul' => 'icons'))
)), array('class' => 'dashboard'));