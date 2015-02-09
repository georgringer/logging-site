<?php

$path = __DIR__ . '/../Packages/Libraries/autoload.php';
require_once($path);

$GLOBALS['TYPO3_CONF_VARS']['MONOLOG'] = array(
	'processorConfiguration' => array(
		'Monolog\\Processor\\WebProcessor' => array(),
		'Monolog\\Processor\\IntrospectionProcessor' => array(),
		\GeorgRinger\Logging\Log\Monolog\Processor\Typo3Processor::class => array(),
	),
	'handlerConfiguration' => array(
		'name' => 'montagmorgen.at',
		'handlers' => array(
			\Monolog\Handler\ChromePHPHandler::class => array(),
			\Monolog\Handler\GelfHandler::class => array(
				new \Gelf\Publisher(new \Gelf\Transport\UdpTransport('127.0.0.1', 12201))
			),
			\Monolog\Handler\StreamHandler::class => array(
				PATH_site . 'typo3temp/out.log',
				\Monolog\Logger::WARNING
			),
			\Monolog\Handler\ChromePHPHandler::class => array(),
			\GeorgRinger\Logging\Log\Monolog\Handler\DatabaseHandler::class => array()
		)
	)
);