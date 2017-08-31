<?php

namespace Fieldset\Model;

interface ProductInterface
{
    /**
     * Will return the ID of the blog post
     *
     * @return int
     */
    public function getId();
    
    /**
     * Will return the TITLE of the blog post
     *
     * @return string
     */
    public function getTitle();
    
    /**
     * Will return the TEXT of the blog post
     *
     * @return string
     */
    public function getText();
}