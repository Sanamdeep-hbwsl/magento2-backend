<?php
namespace Sanamdeep\Userstory7\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class CustomController extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        // $resultPage->getConfig()->getTitle()->set(__('Custom Page Title'));
        return $resultPage;
    }
}
