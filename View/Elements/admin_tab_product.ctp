<?php
// Creating Product Property Fields.
//----------------------------------------------------------
///Field 1
$fieldName = 'name';
$uuid = String::uuid();
$options = array(
    'type' => 'text',
    'label' => 'Family'
);
if(isset($this->data['AparnicProduct'][$fieldName])){
    echo $this->Form->input('Meta.' . $uuid . '.id', array(
        'type' => 'hidden',
        'value' => $this->data['AparnicProduct'][$fieldName]['id'],
        'div' => false,
        'label' => false,
    ));
    $this->Form->unlockField('Meta.' . $uuid . '.id');
    $options['value'] = $this->data['AparnicProduct'][$fieldName]['value'];
}
echo $this->Form->input('Meta.' . $uuid . '.key', array(
    'type' => 'hidden',
    'value' => $fieldName,
    'div' => false,
    'label' => false,
));
echo $this->Form->input('Meta.' . $uuid . '.value', $options);
$this->Form->unlockField('Meta.' . $uuid . '.key');
$this->Form->unlockField('Meta.' . $uuid . '.value');
//----------------------------------------------------------
///Field 2