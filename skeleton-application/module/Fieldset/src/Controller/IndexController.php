<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Fieldset\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Fieldset\Service\CategoryManager;
use Fieldset\Service\AttributeManager;

use Fieldset\Form\ProductForm;


class IndexController extends AbstractActionController
{

    public function indexAction()
    {
    	
    	// Add 3 categories :
    	$categoryManager = new CategoryManager();
    	
    	$data['id'] = 1;
    	$data['title'] = 'Main course';
    	
    	$categoryManager->addCategory($data);
    	
    	$data['id'] = 2;
    	$data['title'] = 'Cake';
    	
    	$categoryManager->addCategory($data);
    	$data['id'] = 3;
    	$data['title'] = 'Aperitif';
    	
    	$categoryManager->addCategory($data);
 
    	
    	// Add 3 attributes :
    	$attributeManager= new AttributeManager();
    	$data['id'] = 1;
    	$data['title'] = 'Color';
    	
    	$attributeManager->addAttribute($data);
    	
    	$data['id'] = 2;
    	$data['title'] = 'Energy';
    	
    	$attributeManager->addAttribute($data);
    	
    	
    	$form = new ProductForm('product-form',null,$categoryManager,$attributeManager);
    	
        return new ViewModel(
            [
                'form' => $form
                
            ]
            
            );
    }
}
