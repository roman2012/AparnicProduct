<?php

class AparnicProductActivation {

	public function beforeActivation($controller) {
		return true;
	}

	public function onActivation($controller) {
                // create a content type naming products
		return true;
	}

	public function beforeDeactivation($controller) {
		return true;
	}

	public function onDeactivation($controller) {
		return true;
	}

}
