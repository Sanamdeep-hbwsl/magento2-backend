<?php

namespace Sanamdeep\Userstory1\Model;

use Sanamdeep\Userstory1\Api\Data\CustomCategoryInterface;

class Test 
{
    private $categoryInterface;
    private $arrayArgument;
    private $stringArgument;

    public function __construct(
        CustomCategoryInterface $categoryInterface,
        array $arrayArgument = [],
        string $stringArgument = 'Sanamdeep'
    ) {
        $this->categoryInterface = $categoryInterface;
        $this->arrayArgument = $arrayArgument;
        $this->stringArgument = $stringArgument;
    }

    public function displayParams()
    {
        $result = "Category Interface: " . get_class($this->categoryInterface) . "\n";
        $result .= "Array Argument: " . print_r($this->arrayArgument, true) . "\n";
        $result .= "String Argument: " . $this->stringArgument . "\n";

        return $result;
    }
}