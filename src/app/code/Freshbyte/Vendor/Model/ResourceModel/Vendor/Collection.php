<?php

namespace Freshbyte\Vendor\Model\ResourceModel\Vendor;

use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Psr\Log\LoggerInterface as Logger;

class Collection extends \Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'freshbyte_vendor_post_collection';
    protected $_eventObject = 'post_collection';

    protected function _construct()
    {
        $this->_init(
            \Freshbyte\Vendor\Model\Vendor::class,
            \Freshbyte\Vendor\Model\ResourceModel\Vendor::class
        );
    }
}
