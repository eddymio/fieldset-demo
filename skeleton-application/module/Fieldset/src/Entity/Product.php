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
    
    
    /**
     * @var array
     */
    protected $items;
    
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
    
    /**
     * @param array $items
     * @return Product
     */
    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }
    
    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }
    
}