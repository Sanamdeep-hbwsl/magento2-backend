<?php
namespace Sanamdeep\Userstory8a\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Sanamdeep\Userstory8a\Model\EmployeeFactory;

class Save extends Action
{
    protected $employeeFactory;

    public function __construct(
        Context $context,
        EmployeeFactory $employeeFactory
    ) {
        $this->employeeFactory = $employeeFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $postData = $this->getRequest()->getParams();
        if (!empty($postData)) {
            try {
                $model = $this->employeeFactory->create();
                $model->setData($postData);
                $model->save();
                $this->messageManager->addSuccessMessage(__('Employee has been saved.'));
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
            $this->_redirect('userstory8a/index/index'); // Redirect back to the page
        } else {
            $this->messageManager->addErrorMessage(__('No data received.'));
            $this->_redirect('userstory8a/index/index'); // Redirect back to the page if no data is posted
        }
    }
}