<?php
namespace Fieldset\Form;

use Zend\Form\Form;

// One product is defined by a category and list of items
class ProductForm extends Form
{
    public function __construct($name = null, $options = array())
    {
        
        parent::__construct($name, $options);
        
        $this->add(array(
            'name' => 'item-fieldset',
            'type' => 'Fieldset\Form\ItemFieldset',
             'options' => array(
                 'use_as_base_fieldset' => true
             )
            
        ));
        
        $this->add(array(
            'type' => 'submit',
            'name' => 'submit',
            'attributes' => array(
                'value' => 'Insert new Product'
            )
        ));
    }
}