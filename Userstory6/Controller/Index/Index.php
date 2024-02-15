<?php

namespace Sanamdeep\Userstory6\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{

    protected $resultPageFactory;

    public function __construct(PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        // $resultPage->getConfig()->getTitle()->set('My Custom Page Title');
        $resultPage->getLayout()->getUpdate()->load(['control_index_index']);
        return $resultPage;
    }

}
