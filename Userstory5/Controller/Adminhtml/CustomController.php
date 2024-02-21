<?php
namespace Sanamdeep\Userstory5\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;

class CustomController extends Action
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        $access = $this->getRequest()->getParam('access');
        
        if ($access === 'true') {
            $this->_view->loadLayout();
            $this->_view->renderLayout();
        } else {
            $this->messageManager->addErrorMessage(__('Access denied by Sanamdeep.'));
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('*/*/');
            return $resultRedirect;
        }
    }
}
