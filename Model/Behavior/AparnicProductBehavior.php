<?php
App::uses('ModelBehavior', 'Model');
class AparnicProductBehavior extends ModelBehavior{
    
    //----------------------------------------------------------
    public function afterFind(Model $model, $results, $primary = false) {
        
        $productPropertiesMetaKeys = Configure::read('AparnicProduct.MetaKeys');
        foreach ($results as &$result) {
            if(isset($result['Meta'])){
                foreach ($result['Meta'] as $key => $meta) {
                    if(in_array($meta['key'], $productPropertiesMetaKeys)){
                        $result['AparnicProduct'][$meta['key']] = array_intersect_key(
                                $meta, 
                                array('id' => '', 'key' => '', 'value' => '')
                        );
                        unset($result['Meta'][$key]);
                    }
                }
            }
        }
        return $results;
    }
}
