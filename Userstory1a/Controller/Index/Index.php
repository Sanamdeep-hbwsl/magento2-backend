<?php

namespace Sanamdeep\Userstory1a\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Sanamdeep\Userstory1a\Model\Test;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    protected $test;
    protected $pageFactory;

    public function __construct(
        PageFactory $pageFactory,
        Test $test
    ) {
        $this->pageFactory = $pageFactory;
        $this->test = $test;
    }

    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set($this->test->displayParams());
        return $page;
    }
}
