<?php
namespace Fieldset\Entity;

class Product
{
    /**
     * @var int
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $title;
    
    /**
     * @var object refering product category
     */
    protected $categ;
    
    
    // Construct function with values
    public function __construct($id = null, $title = null, $categ = null) 
    {
    	$this->id = $id;
    	$this->title = $title;
    	$this->categ = $categ;	
    	
    }
 
    
    public function getId()
    {	
    	return $this->id;
    }
    
    public function getTitle()
    {
    	return $this->title;
    }
    
    public function getCateg()
    {
    	return $this->categ;
    }
    
    
    
}