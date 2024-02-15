<?php
namespace Sanamdeep\Userstory4\App\Router;
use Magento\Framework\App\Response\RedirectInterface;
use Magento\Framework\App\ResponseInterface; // Add this line
class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $redirectUrl = 'http://sanam.magento.com/contact/';

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $responseFactory = $objectManager->get(\Magento\Framework\App\ResponseFactory::class);


        $response = $responseFactory->create();
        $response->setRedirect($redirectUrl);
        $response->sendResponse();
        exit;
    }
}