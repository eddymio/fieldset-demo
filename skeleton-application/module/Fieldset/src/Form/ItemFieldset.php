<?php
namespace Fieldset\Form;

use Fieldset\Entity\Item;
use Zend\Form\Fieldset;
use Zend\Hydrator\ClassMethods;

class ItemFieldset extends Fieldset
{
    public function __construct($name = null, $options = array())
    {
        
        parent::__construct($name, $options);
        
        $this->setHydrator(new ClassMethods(false));
        $this->setObject(new Item());
        
        $this->add(array(
            'type' => 'hidden',
            'name' => 'id'
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
            'name' => 'title',
            'options' => array(
                'label' => 'Item Title'
            )
        ));
    }
}