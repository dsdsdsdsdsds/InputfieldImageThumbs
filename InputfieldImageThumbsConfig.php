<?php

class InputfieldImageThumbsConfig extends ModuleConfig {

    public function __construct() {
        $this->add(array(
            // Text field: greeting
            array(
                'name' => 'imageWidths', // name of field
                'type' => 'text', // type of field (any Inputfield module name)
                'label' => $this->_('Image widths'), // field label
                'description' => $this->_('Enter the desired widths the image should be resized to (max. 10 comma separated values in pixel).'),
                'required' => true,
                'value' => $this->_('320,1600'), // default value
            )
        ));
    }
}
