<?php
namespace Fieldset\Entity;

//use RuntimeException;
//use Zend\Db\TableGateway\TableGatewayInterface;

// An item is part of a product - ex : ingredient of a recipe
class Item
{

	/**
	 * @var int
	 */
	protected $id;
	
	/**
	 * @var string
	 */
	protected $name;
	
	/**
	 * @var string
	 */
	protected $description;
	
	/**
	 * @var object refering attribute
	 */
	protected $attribute;
	
	
	// Construct function with values
	public function __construct($id = null, $name = null, $description = null , $attribute = null)
	{
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		
		$this->attribute = $attribute;
		
	}
	
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getName()
	{
		return $this->name;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getAttribute()
	{
		return $this->attribute;
	}
	
	
}

