<?php

class AnalyticsActivation {

	public function beforeActivation($controller) {
		return true;
	}

	public function onActivation($controller) {
                // create a content type naming product
                // setting reqiure product routes
		return true;
	}

	public function beforeDeactivation($controller) {
		return true;
	}

	public function onDeactivation($controller) {
                //removing product routes
		return true;
	}

}
