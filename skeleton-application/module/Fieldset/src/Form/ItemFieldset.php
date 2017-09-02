<?php
namespace Fieldset\Form;

use Fieldset\Entity\Item;
use Zend\Form\Fieldset;
use Zend\Hydrator\ClassMethods;

class ItemFieldset extends Fieldset
{
    public function __construct($name = null, $options = array(), $attributeManager = null)
    {
        
        parent::__construct($name, $options);
        
        $this->setHydrator(new ClassMethods(false));
        $this->setObject(new Item());
        
        $this->add(array(
            'type' => 'number',
            'name' => 'id',
        		'options' => ['label' => 'Provide a numeric ID']
        ));
        
        $this->add(array(
            'type' => 'text',
            'name' => 'description',
            'options' => array(
                'label' => 'Item description'
            )
        ));
        
        $this->add(array(
            'type' => 'text',
            'name' => 'name',
            'options' => array(
                'label' => 'Item name'
            )
        ));
        
        // Add "attribute" field
        $this->add([
        		'type'  => 'select',
        		'name' => 'attribute',
        		'attributes' => [
        				'id' => 'attribute',
        		],
        		'options' => [
        				'label' => 'Attribute',
        				'empty_option' => '-- Please select --',
        				'value_options' => $attributeManager->getAttributes()
        				
        		],
        ]);
        
    }
}