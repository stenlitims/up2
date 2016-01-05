<?php

/**
 * Class upformMainController
 */
abstract class upformMainController extends modExtraManagerController {
	/** @var upform $upform */
	public $upform;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('upform_core_path', null, $this->modx->getOption('core_path') . 'components/upform/');
		require_once $corePath . 'model/upform/upform.class.php';

		$this->upform = new upform($this->modx);
		//$this->addCss($this->upform->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->upform->config['jsUrl'] . 'mgr/upform.js');
		$this->addHtml('
		<script type="text/javascript">
			upform.config = ' . $this->modx->toJSON($this->upform->config) . ';
			upform.config.connector_url = "' . $this->upform->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('upform:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends upformMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}