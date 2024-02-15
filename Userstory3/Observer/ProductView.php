<?php

namespace Sanamdeep\Userstory3a\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class ProductView implements ObserverInterface{

    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer){
        $product = $observer->getProduct();
        $originalName = $product->getName();

        $modifiedName = $originalName . ' -Modified by Sanamdeep with Observer and events';

        $product->setName($modifiedName);
        
        $this->logger->info('Product Name by Sanamdeep: ' . $originalName);

        return $product;
    }
}