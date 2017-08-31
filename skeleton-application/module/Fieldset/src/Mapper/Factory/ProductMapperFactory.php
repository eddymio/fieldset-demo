<?php
namespace Fieldset\Mapper\Factory;

use Zend\ServiceManager\FactoryInterface;
//use Zend\ServiceManager\ServiceLocatorInterface;


class ProductMapperFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
	//http://davidhavl.com/devnotes/2015/02/zf2-dependency-injection-factories-invoke/
/*    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new ProductService(
            $serviceLocator->get('Fieldset\Mapper\ProductMapperInterface')
            );
    }
  */  
    // OR : 
    
	public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
    	// get some dependency
    	$dependency = $container->get('Fieldset\Mapper\ProductMapperInterface');
    	// inject it to the constructor
    	return new $requestedName($dependency);
    }
    
    
}