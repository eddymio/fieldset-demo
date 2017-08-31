<?php 

namespace Fieldset;

class Module
{
    const VERSION = '3.0.3-dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    
    
    public function getServiceConfig()
    {
    	return [
    			'factories' => [
    					Entity\Item::class => function($container) {
    						$tableGateway = $container->get(Entity\Item::class);
    						return new Entity\Item();
    					},
    					],
    					];
    }
}
