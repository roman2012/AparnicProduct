<?php

class AparnicProductActivation {

	public function beforeActivation($controller) {
		return true;
	}

	public function onActivation($controller) {
                // create a content type naming products
                $nodeType = ClassRegistry::init('Taxonomy.Type');
                
                $data = array(
                    'Type' => array(
                        'title' => __d('aparnic_product', 'products'),
                        'alias' => 'products',
                        'description' => __d('aparnic_product', 'add any product')
                    )
                );
                
                $nodeType->create();
                $nodeType->save($data);
                
		return true;
	}

	public function beforeDeactivation($controller) {
		return true;
	}

	public function onDeactivation($controller) {
		return true;
	}

}
