<?php
// File: app/code/YourVendor/YourModule/Test/TestObserver.php

namespace Sanamdeep\Userstory14\Test;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Event\ManagerInterface;

class TestObserver extends Action
{
    protected $eventManager;

    public function __construct(
        Context $context,
        ManagerInterface $eventManager
    ) {
        parent::__construct($context);
        $this->eventManager = $eventManager;
    }

    public function execute()
    {
        // Simulate product quantity below threshold
        $productQty = 5;
        $threshold = 10;

        // Dispatch custom event
        $this->eventManager->dispatch('custom_product_low_quantity', ['product_qty' => $productQty]);

        echo "Custom event dispatched successfully.";
    }
}
