<?php

namespace Freshbyte\Vendor\Setup;

use Magento\Eav\Setup\EavSetup;

class VendorSetup extends  EavSetup
{
    public function getDefaultEntities() {
        $vendorEntity = \Freshbyte\Vendor\Model\Vendor::ENTITY;
        $entities = [
            $vendorEntity => [
                'entity_model' => \Freshbyte\Vendor\Model\ResourceModel\Vendor::class,
                'table' => $vendorEntity . '_entity',
                'attributes' => [
                    'name' => [
                        'type' => 'static',
                    ],
                    'status' => [
                        'type' => 'static',
                    ],
                ],
            ],
        ];
        return $entities;
    }

}
