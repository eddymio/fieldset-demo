<?php
namespace Fieldset\Mapper;

use Fieldset\Entity\ProductInterface;

interface ProductMapperInterface
{
    /**
     * @param int|string $id
     * @return ProductInterface
     * @throws \InvalidArgumentException
     */
    public function find($id);
    
    /**
     * @return array|ProductInterface[]
     */
    public function findAll();
    
    /**
     * @param ProductInterface $productObject
     *
     * @param ProductInterface $productObject
     * @return ProductInterface
     * @throws \Exception
     */
    public function save(ProductInterface $productObject);
}