<?php

namespace Sanamdeep\Userstory1a\Model;

use Sanamdeep\Userstory1a\Api\Data\CustomCategoryInterface;
use Psr\Log\LoggerInterface;
class Test 
{
    private $categoryInterface;
    private $arrayArgument;
    private $stringArgument;
    private LoggerInterface $logger;

    public function __construct(
        CustomCategoryInterface $categoryInterface,
        LoggerInterface $logger,
        array $arrayArgument = [],
        string $stringArgument = 'Sanamdeep user story 1a'
    ) {
        $this->validateCategoryInterface($categoryInterface);
        $this->categoryInterface = $categoryInterface;
        $this->arrayArgument = $arrayArgument;
        $this->stringArgument = $stringArgument;
        $this->logger = $logger;

    }

    public function displayParams()
    {
        $serializedData = json_encode($this->arrayArgument);
        $this->logger->info('Serialized Array Data: ' . $serializedData);
        $result = "Category Interface: " . get_class($this->categoryInterface) . "\n";
        $result .= "Array Argument: " . print_r($this->arrayArgument, true) . "\n";
        $result .= "String Argument: " . $this->stringArgument . "\n";

        return $result;
    }
    private function validateCategoryInterface($categoryInterface)
    {
        if (!$categoryInterface instanceof CustomCategoryInterface) {
            throw new \InvalidArgumentException('Injected CategoryInterface is not an instance of CustomInterface');
        }
    }
}