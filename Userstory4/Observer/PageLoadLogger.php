<?php
namespace Sanamdeep\Userstory4\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RouterList;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\Action\Context;

class PageLoadLogger implements ObserverInterface
{
    protected $logger;

    protected $routerList;

    public function __construct(LoggerInterface $logger, RouterList $routerList)
    {
        $this->logger = $logger;
        $this->routerList = $routerList;
    }

    public function execute(Observer $observer)
    {
        $availableRouters = [];

        foreach ($this->routerList as $router) {
            $availableRouters[] = get_class($router);
        }

        $this->logger->info('Available Routers list by Sanamdeep : ' . implode(', ', $availableRouters));
    }
}
