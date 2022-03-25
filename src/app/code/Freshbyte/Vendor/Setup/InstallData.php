<?php

namespace Freshbyte\Vendor\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{
    private $vendorSetupFactory;

    public function __construct(
        \Freshbyte\Vendor\Setup\VendorSetupFactory $vendorSetupFactory
    ) {
        $this->vendorSetupFactory = $vendorSetupFactory;
    }


    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $vendorEntity = \Freshbyte\Vendor\Model\Vendor::ENTITY;
        $vendorSetup = $this->vendorSetupFactory->create(['setup' => $setup]);
        $vendorSetup->installEntities();
        $vendorSetup->addAttribute(
            $vendorEntity, 'vendor', ['type' => 'text']
        );

        $setup->endSetup();

    }
}
