<?php

/**
 * Update an Item
 */
class upformOfficeItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'upformItem';
	public $classKey = 'upformItem';
	public $languageTopics = array('upform');
	//public $permission = 'save';


	/**
	 * We doing special check of permission
	 * because of our objects is not an instances of modAccessibleObject
	 *
	 * @return bool|string
	 */
	public function beforeSave() {
		if (!$this->checkPermissions()) {
			return $this->modx->lexicon('access_denied');
		}

		return true;
	}


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$id = (int)$this->getProperty('id');
		$name = trim($this->getProperty('name'));
		if (empty($id)) {
			return $this->modx->lexicon('upform_item_err_ns');
		}

		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('upform_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('name' => $name, 'id:!=' => $id))) {
			$this->modx->error->addField('name', $this->modx->lexicon('upform_item_err_ae'));
		}

		return parent::beforeSet();
	}
}

return 'upformOfficeItemUpdateProcessor';
