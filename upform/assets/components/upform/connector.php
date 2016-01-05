<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var upform $upform */
$upform = $modx->getService('upform', 'upform', $modx->getOption('upform_core_path', null, $modx->getOption('core_path') . 'components/upform/') . 'model/upform/');
$modx->lexicon->load('upform:default');

// handle request
$corePath = $modx->getOption('upform_core_path', null, $modx->getOption('core_path') . 'components/upform/');
$path = $modx->getOption('processorsPath', $upform->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));