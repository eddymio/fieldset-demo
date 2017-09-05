<?php
namespace Fieldset\Form;

use Fieldset\Entity\Product;
use Zend\Form\Fieldset;
use Zend\Hydrator\ClassMethods;
use Fieldset\Form\ItemFieldset;

class ProductFieldset extends Fieldset
{
    public function __construct($name = null, $options = array(), $categoryManager = null, $attributeManager = null)
    {
        
        parent::__construct($name, $options);
        
        $this->setHydrator(new ClassMethods(false));
        $this->setObject(new Product());
        
        /* DETAILS about the new product*/
        $this->add(array(
            'type' => 'number',
            'name' => 'id',
            'options' => ['label' => 'Provide a numeric ID']
        ));
        
        
        $this->add(array(
            'type' => 'text',
            'name' => 'title',
            'options' => array(
                'label' => 'Product Title'
            )
        ));
        
        // Add "category" field
        $this->add([
            'type'  => 'select',
            'name' => 'category',
            'attributes' => [
                'id' => 'category',
            ],
            'options' => [
                'label' => 'Category',
                'empty_option' => '-- Please select --',
                'value_options' => $categoryManager->getCategories()
                
            ],
        ]);
        
        

        // Fieldset for ITEM belonging to product - inject the attribute manager to retrieve attributes for each item:
        $item = new ItemFieldset('Item-details',null,$attributeManager);

        $this->add(array(
            'type' => 'collection',
            'name' => 'items',
            'options' => array(
                //https://zendframework.github.io/zend-form/element/collection/
                'should_create_template' => true,
                'allow_add' => true,
                'count' => 2,
                'target_element' =>  $item,
                'template_placeholder' => '__placeholder__',
                
            )
        ));
    }
}