<?php

namespace Fieldset\Service;

use Fieldset\Entity\ProductInterface;

interface ProductServiceInterface
{
    /*
     * @return array|ProductInterface[]
     */
    public function findAllProducts();
    
    /**
     * Should return a single blog post
     *
     * @param  int $id Identifier of the Post that should be returned
     * @return ProductInterface
     */
    public function findProduct($id);
    
    /**
     * Should save a given implementation of the PostInterface and return it. If it is an existing Post the Post
     * should be updated, if it's a new Post it should be created.
     *
     * @param  ProductInterface $product
     * @return ProductInterface
     */
    public function saveProduct(ProductInterface $product);
}