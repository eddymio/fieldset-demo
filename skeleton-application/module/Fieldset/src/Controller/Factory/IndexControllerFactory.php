<?php
namespace Fieldset\Controller\Factory;

//use Interop\Container\ContainerInterface;


use Fieldset\Controller\IndexController;


/**
 * This is the factory for IndexController. Its purpose is to instantiate the
 * controller.
 */
class IndexControllerFactory
{
    public function __invoke($controllerManager)
    {
    	// get underlaying service manager
    	/* @var Zend\ServiceManager\ServiceManager $serviceManager */
    	$serviceManager = $controllerManager->getServiceLocator();
    	
    	// get some dependency
    	$dependencyService = $serviceManager->get('Fieldset\Mapper\ProductMapperInterface');
    	// inject it to the constructor of the controller
    	return new IndexController($dependencyService);
    }
    /*
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        $itemService        = $realServiceLocator->get('Fieldset\Service\PostServiceInterface');
        $itemInsertForm     = $realServiceLocator->get('FormElementManager')->get('Fieldset\Form\ProductForm');
        
        return new IndexController(
            $itemService,
            $itemInsertForm
            );
    }*/

}