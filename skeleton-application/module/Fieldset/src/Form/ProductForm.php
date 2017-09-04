<?php
namespace Fieldset\Form;

use Zend\Form\Form;
use Zend\Form\Element;
use Fieldset\Form\ProductFieldset;
use Zend\Hydrator\ClassMethods;

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

    	$this->setHydrator(new ClassMethods(false));
    	
        $this->categoryManager= $categoryManager;
        $this->attributeManager= $attributeManager;
        
        /***CREATE PRODUCT FIELDSET !!! 
         * https://framework.zend.com/manual/2.4/en/modules/zend.form.collections.html
         * ****/
        
        $product = new ProductFieldset('new-product',null, $categoryManager, $attributeManager);
        
        $this->setOptions(['use_as_base_fieldset' => true]);
        $this->add($product);
        
        
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