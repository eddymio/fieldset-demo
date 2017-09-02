<?php
namespace Fieldset\Service;

use Fieldset\Entity\Category;
/**
 * This service is responsible for adding/editing categories
 */
class CategoryManager
{

	protected $categories = array();
	
	public function __construct($categories = null)
	{
		$this->categories = $categories; 
	}
	
	/**
	 * This method adds a new category.
	 */
	
	public function addCategory($data)
	{
		// Create new category entity.
		$this->categories[]= new Category($data['id'],$data['title']);

	}
	
	/**
	 * Get the list of categories ?
	 */
	public function getCategories() {
		
		$categories = array();
		
		// transform the object into an array for the select form
		foreach ($this->categories as $object)
		{
			$categories[$object->getId()] = $object->getTitle();
		}
		
		return $categories;
	}
	
}