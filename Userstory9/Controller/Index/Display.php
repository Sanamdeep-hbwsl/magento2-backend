<?php

namespace Sanamdeep\Userstory9\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Display extends Action
{
    protected $pageFactory;
    protected $scopeConfig;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
        $this->scopeConfig = $scopeConfig;
    }

    public function execute()
    {
        $enable = $this->scopeConfig->getValue('general/custom_config/enable');
        $textToDisplay = $this->scopeConfig->getValue('general/custom_config/text_to_display');
        
        if ($enable == 1) {
            // echo 'hello brother'; // Display the text
            $page = $this->pageFactory->create();
            $page->getConfig()->getTitle()->prepend($textToDisplay);
            return $page;
        } else {
            $page = $this->pageFactory->create();
            $page->getConfig()->getTitle()->prepend($textToDisplay);
            return $page;
        }
    }
}
