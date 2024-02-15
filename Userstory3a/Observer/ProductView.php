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
        $product = $observer->getData('product');
        $productName = $product->getName();
        $productSku = $product->getSku();
        $productPrice = $product->getPrice();
        $stockItem = $product->getExtensionAttributes()->getStockItem();
        $quantityPerSource = $stockItem->getQty();
        $salableQuantity = $stockItem->getQty();

        $logMessage = "User Story 3a. Product Name: $productName | SKU: $productSku | Price: $productPrice | Quantity per Source: $quantityPerSource | Salable Quantity: $salableQuantity";
        $this->logger->info($logMessage);
    }
}