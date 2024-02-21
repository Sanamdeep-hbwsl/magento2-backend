<?php
namespace Sanamdeep\Userstory8a\Controller\Employee;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Sanamdeep\Userstory8a\Model\EmployeeFactory;

class Delete extends Action
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
        $employeeId = $this->getRequest()->getParam('employee_id');
        if ($employeeId) {
            $employee = $this->employeeFactory->create()->load($employeeId);
            if ($employee->getId()) {
                $employee->delete();
                $this->messageManager->addSuccessMessage(__('Employee has been deleted.'));
            }
        }
        $this->_redirect('userstory8a/index/index'); // Redirect back to the list page    
    }
}
