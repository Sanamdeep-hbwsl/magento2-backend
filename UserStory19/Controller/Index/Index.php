<?php

namespace Sanamdeep\UserStory19\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\ActionInterface;
use Sanamdeep\UserStory19\ViewModel\Service;

class Index implements ActionInterface
{
    protected $pageFactory;
    protected $service;

    public function __construct(PageFactory $pageFactory, Service $service)
    {
        $this->pageFactory = $pageFactory;
        $this->service = $service;
    }

    public function execute()
    {
        dump($this->service->getCrossSellProducts());
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set("User Story One Nine");
        return $page;
    }
}
