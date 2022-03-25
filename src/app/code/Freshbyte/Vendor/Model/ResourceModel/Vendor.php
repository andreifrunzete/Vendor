<?php

namespace Freshbyte\Vendor\Model\ResourceModel;

class Vendor extends \Magento\Eav\Model\Entity\AbstractEntity
{

    public function getEntityType()
    {
        if (empty($this->_type)) {
            $this->setType(\Freshbyte\Vendor\Model\Vendor::ENTITY);
        }
        return parent::getEntityType();
    }

}
