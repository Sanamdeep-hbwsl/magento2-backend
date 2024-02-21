<?php

namespace Sanamdeep\UserStory21\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    protected PageFactory $pageFactory;

    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }
    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set("hii");
        return $page;
    }
}
