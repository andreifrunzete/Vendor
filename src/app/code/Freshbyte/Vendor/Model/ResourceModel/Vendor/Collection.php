<?php

namespace Freshbyte\Vendor\Model\ResourceModel\Vendor;

class Collection extends \Magento\Eav\Model\Entity\Collection\AbstractCollection
{

    protected function _construct()
    {
        $this->_init(
            \Freshbyte\Vendor\Model\Vendor::class,
            \Freshbyte\Vendor\Model\ResourceModel\Vendor::class
        );
    }
}
