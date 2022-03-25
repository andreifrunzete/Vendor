<?php

namespace Freshbyte\Vendor\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        // Table name vendorEntity
        $vendorEntity = \Freshbyte\Vendor\Model\Vendor::ENTITY;
        $table = $setup->getConnection()
            ->newTable($setup->getTable( $vendorEntity . '_entity'))
            ->addColumn(
                'ID',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'Vendors ID'
            )
            ->addColumn(
                'Name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,

                null,
                ['unsigned' => true, 'nullable' => false, 'default' => 'FirstName LastName'],
                'Vendors Name'
            )
            ->addColumn(
                'Status',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['unsigned' => true, 'nullable' => false, 'default' => 'Enable'],
                'Status'
            )
            ->addColumn(
                'Email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['unsigned' => true, 'nullable' => false, 'default' => 'example@email.com'],
                'Entity ID'
            )
            ->addColumn(
                'Action',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['unsigned' => true, 'nullable' => false, 'default' => 'Edit'],
                'ACTION'
            )
            ->setComment('Vendor Table');





        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}

