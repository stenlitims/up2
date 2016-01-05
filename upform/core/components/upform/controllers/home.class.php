<?php

/**
 * The home manager controller for upform.
 *
 */
class upformHomeManagerController extends upformMainController {
	/* @var upform $upform */
	public $upform;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('upform');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->upform->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->upform->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->upform->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->upform->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->upform->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->upform->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->upform->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "upform-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->upform->config['templatesPath'] . 'home.tpl';
	}
}