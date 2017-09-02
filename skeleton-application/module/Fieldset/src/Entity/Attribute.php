<?php
namespace Fieldset\Entity;

// entity to store attributes of items - ex : ingredient is having a certain color...
class Attribute
{
    /**
     * @var int
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $title;
    
  
    // Construct function with values
    public function __construct($id = null, $title = null) 
    {
    	$this->id = $id;
    	$this->title = $title;
    	
    }
 
    
    public function getId()
    {	
    	return $this->id;
    }
    
    public function getTitle()
    {
    	return $this->title;
    }
    
    
}