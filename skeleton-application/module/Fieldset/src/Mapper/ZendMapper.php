<?php

namespace Fieldset\Mapper;

use Fieldset\Entity\ProductInterface;



class ZendMapper implements ProductMapperInterface
{

    public function __construct( ) {

        
    }
    

    public function find($id)
    {

        
        throw new \InvalidArgumentException("$id not found.");
    }
    
    /**
     * @return array|ProductInterface[]
     */
    public function findAll()
    {
        return null;
    }
    
    /**
     * @param ProductInterface $postObject
     *
     * @return ProductInterface
     * @throws \Exception
     */
    public function save(ProductInterface $productObject)
    {

        
        throw new \Exception("Database error");
    }
}