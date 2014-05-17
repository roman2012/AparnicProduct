<?php
App::uses('ModelBehavior', 'Model');
class AparnicProductBehavior extends ModelBehavior{
    
    public function afterFind(Model $model, $results, $primary = false) {
        // unset product meta fields because custom field does not using it
        // and setting those to anothr key of $results
    }
}
