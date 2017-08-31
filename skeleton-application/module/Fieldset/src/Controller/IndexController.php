<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Fieldset\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Fieldset\Service\ProductServiceInterface;
use Fieldset\Form\ProductForm;


class IndexController extends AbstractActionController
{
   /* protected $productService;
    protected $productForm;
    
    public function __construct(ProductServiceInterface $productService, FormInterface $productForm) 
    {    	
            $this->productService = $productService;
            $this->productForm    = $productForm;
    }
    */
    
    public function indexAction()
    {
    	
    	$form = new ProductForm();
    	
        return new ViewModel(
            [
                'form' => $form
                
            ]
            
            );
    }
}
