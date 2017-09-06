<?php 
namespace Fieldset;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'fieldset' => [
                'type'    => Segment::class,
                'options' => [
                    'route'       => '/fieldset[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults'    => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'fieldset' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
        ],
    ],
    'service_manager' => array(
        ),
    
    'view_helpers'=> [

        'factories' => [
            View\Helper\FormInputTd::class => InvokableFactory::class,
        ],
        'aliases' => [
            'formInputTd' => View\Helper\FormInputTd::class
        ]
        
        
        
    ]
];