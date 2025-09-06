<?php

declare(strict_types=1);

namespace Esplin\CustomerNumber\Test;

use Magento\Eav\Api\AttributeRepositoryInterface;
use Magento\TestFramework\Helper\Bootstrap;
use PHPUnit\Framework\TestCase;

class SetupTest extends TestCase
{
    private $objectManager;
    private $attributeRepository;

    public function setUp(): void
    {
        $this->objectManager = Bootstrap::getObjectManager();
        $this->attributeRepository = $this->objectManager->create(AttributeRepositoryInterface::class);
    }

    public function testIfCustomerNumberAttributeWasCreatedCorrectly()
    {
        $attribute = $this->attributeRepository->get('customer', 'customer_number');

        $this->assertNotNull($attribute);
        $this->assertEquals('customer_number', $attribute->getAttributeCode());
        $this->assertEquals('Customer Number', $attribute->getDefaultFrontendLabel());
    }
}