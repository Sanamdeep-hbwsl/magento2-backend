<?php
// app/code/YourVendor/YourModule/Observer/LowQuantityObserver.php

namespace Sanamdeep\Userstory14\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LowQuantityObserver implements ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        // Log the event data to debug
        $this->logger->debug('LowQuantityObserver: Observer data: ' . print_r($observer->getData(), true));

        $product = $observer->getData('product');
        $productQty = $observer->getData('product_qty');

        // Check if product object is null
        if ($product === null) {
            $this->logger->error('LowQuantityObserver: Product object is null');
            return;
        }

        // You can customize the notification content here
        $message = "Low inventory alert:\n";
        $message .= "Product Name: " . $product->getName() . "\n";
        $message .= "SKU: " . $product->getSku() . "\n";
        $message .= "Quantity: " . $productQty;

        // Example: Log the notification
        $this->logger->info($message);

        // Example: Send email notification to store owner or warehouse manager
        // Replace this with your actual notification method
        // $this->sendNotificationEmail($message);
    }
}
