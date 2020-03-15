<?php

namespace Bdr;

use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'bdr' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/bdr[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\BdrController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            'bdr' => __DIR__ . '/../view',
        ],
    ],
];
