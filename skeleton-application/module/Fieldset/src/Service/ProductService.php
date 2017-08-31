<?php

namespace Fieldset\Service;

use Fieldset\Mapper\ProductMapperInterface;


class ProductService implements ProductServiceInterface
{
    /**
     * @var \Fieldset\Mapper\ProductMapperInterface
     */
    protected $productMapper;
    
    /**
     * @param ProductMapperInterface $productMapper
     */
    public function __construct(ProductMapperInterface $productMapper)
    {
        $this->productMapper = $productMapper;
    }
    
    /**
     * {@inheritDoc}
     */
    public function findAllProducts()
    {
        return $this->productMapper->findAll();
    }
    
    /**
     * {@inheritDoc}
     */
    public function findProduct($id)
    {
        return $this->productMapper->find($id);
    }
    
    /**
     * {@inheritDoc}
     */
    public function saveProduct(ProductInterface $product)
    {
        return $this->productMapper->save($product);
    }
}