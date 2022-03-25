<?php

namespace Freshbyte\Vendor\Model;

class Vendor extends \Magento\Framework\Model\AbstractModel
{
    const ENTITY = 'vendor';

    protected function _construct()
    {
        $this->_init(\Bss\NewEntityType\Model\ResourceModel\Vendor::class);
        $this->_init('Vendors', 'ID');
        $this->_init('Vendors_details', 'id');
    }

}
