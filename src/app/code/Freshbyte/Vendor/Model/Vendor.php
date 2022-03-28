<?php

namespace Freshbyte\Vendor\Model;

class Vendor extends \Magento\Framework\Model\AbstractModel
{
    const ENTITY = 'vendor';

    protected function _construct()
    {
        $this->_init(\Bss\NewEntityType\Model\ResourceModel\Vendor::class);
        $this->_init('vendors', 'ID');
        $this->_init('vendors_address', 'id');
    }

}
