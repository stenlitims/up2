<?php

/**
 * Enable an Item
 */
class upformOfficeItemEnableProcessor extends modObjectProcessor {
	public $objectType = 'upformItem';
	public $classKey = 'upformItem';
	public $languageTopics = array('upform');
	//public $permission = 'save';


	/**
	 * @return array|string
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->failure($this->modx->lexicon('upform_item_err_ns'));
		}

		foreach ($ids as $id) {
			/** @var upformItem $object */
			if (!$object = $this->modx->getObject($this->classKey, $id)) {
				return $this->failure($this->modx->lexicon('upform_item_err_nf'));
			}

			$object->set('active', true);
			$object->save();
		}

		return $this->success();
	}

}

return 'upformOfficeItemEnableProcessor';
