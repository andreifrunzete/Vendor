<?php

namespace Freshbyte\Vendor\Model\ResourceModel;

class Vendor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init(\Freshbyte\Vendor\Model\Vendor::ENTITY, 'id');
    }
}
