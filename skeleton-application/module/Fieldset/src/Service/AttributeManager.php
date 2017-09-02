<?php
namespace Fieldset\Service;

use Fieldset\Entity\Attribute;
/**
 * This service is responsible for adding/retrieving attributes
 */
class AttributeManager
{

	protected $attributes = array();
	
	public function __construct($attributes= null)
	{
		$this->attributes= $attributes; 
	}
	
	/**
	 * This method adds a new attribute.
	 */
	
	public function addAttribute($data)
	{
		// Create new category entity.
		$this->attributes[]= new Attribute($data['id'],$data['title']);

	}
	
	/**
	 * Get the list of attributes
	 */
	public function getAttributes() {
		
		$attributes= array();
		
		// transform the object into an array for the select form
		foreach ($this->attributes as $object)
		{
			$attributes[$object->getId()] = $object->getTitle();
		}
		
		return $attributes;
	}
	
}