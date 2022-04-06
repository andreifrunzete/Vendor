<?php

namespace Freshbyte\Vendor\Model;

class Vendor extends \Magento\Framework\Model\AbstractModel
{
    const ENTITY = 'vendors';

    protected function _construct()
    {
        $this->_init(\Freshbyte\Vendor\Model\ResourceModel\Vendor::class);
    }
}
