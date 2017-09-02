<?php
namespace Fieldset\Form;

use Zend\Form\Form;
use Zend\Form\Element;
use Fieldset\Form\ItemFieldset;

// One product is defined by a category and list of items
class ProductForm extends Form
{
	
	/**
	 * Category manager.
	 * @var Fieldset\Service\CategoryManager
	 */
	private $categoryManager = null;
	
	/**
	 * Attribute manager.
	 * @var Fieldset\Service\AttributeManager
	 */
	private $attributeManager = null;
	
	
	public function __construct($name = null, $options = array(), $categoryManager = null, $attributeManager = null)
    {
        
    	parent::__construct($name, $options);

        $this->categoryManager= $categoryManager;
        $this->attributeManager= $attributeManager;
        
        
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
        				'value_options' => $this->categoryManager->getCategories()
        				
        		],
        ]);

        // Fieldset for ITEM belonging to product:
        $item = new ItemFieldset('Item-details',null,$this->attributeManager);
       /* $item->setOptions(
            [ 

                'template_placeholder' => '__placeholder__'
            ]
            
            
            );
        */
        /*
        $items = new Element\Collection('Item-details');
        $items->setTargetElement($item);
        
        $items->setOptions([
                     'use_as_base_fieldset' => true,
                     'should_create_template' => true,
                     'allow_add' => true,               
                     'count' => 2,
            ]
        );
        
        
        $this->add($items);
        */
        // OR : 
        $this->add(array(
            'type' => 'collection',
            'name' => 'items',
            'options' => array(
                
                'should_create_template' => true,
                'allow_add' => true,   
                'count' => 2,
                'target_element' =>  $item,
                'template_placeholder' => '__placeholder__'
            )
        ));
        
        /***CREATE PRODUCT FIELDSET !!! 
         * https://framework.zend.com/manual/2.4/en/modules/zend.form.collections.html
         * ****/
        
        // Submit button :        
        $this->add(array(
            'type' => 'submit',
            'name' => 'submit',
            'attributes' => array(
                'value' => 'Insert new Product'
            )
        ));
    }
}