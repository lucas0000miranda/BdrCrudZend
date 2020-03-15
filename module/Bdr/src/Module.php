<?php

namespace Bdr;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                Model\BdrTable::class => function($container) {
                    $tableGateway = $container->get(Model\BdrTableGateway::class);
                    return new Model\BdrTable($tableGateway);
                },
                Model\BdrTableGateway::class => function ($container) {
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Model\Bdr());
                    return new TableGateway('bdr', $dbAdapter, null, $resultSetPrototype);
                },
            ],
        ];
    }

    public function getControllerConfig()
    {
        return [
            'factories' => [
                Controller\BdrController::class => function($container) {
                    return new Controller\BdrController(
                        $container->get(Model\BdrTable::class)
                    );
                },
            ],
        ];
    }
}
