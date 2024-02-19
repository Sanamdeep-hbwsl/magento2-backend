<?php
// app/code/YourVendor/YourModule/Controller/Index/Index.php

namespace Sanamdeep\Userstory14\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $eventManager;
    protected $pageFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        ManagerInterface $eventManager
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
        $this->eventManager = $eventManager;
    }

    public function execute()
    {
        // Logic to check product quantity and threshold
        $productQty = 5; // Example product quantity
        // $threshold = 10; // Example threshold

        // Check if product quantity is below threshold
        // if ($productQty < $threshold) {
        //     // Dispatch custom event
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->prepend("Low quantity detected");
        $this->eventManager->dispatch('custom_product_low_quantity', ['product_qty' => $productQty]);
        return $page;
        // }
        // die('dsdsfsds');
        // Add your further logic here

        // Redirect or return response
    }
}
