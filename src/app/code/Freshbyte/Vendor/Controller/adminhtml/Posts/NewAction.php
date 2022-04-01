<?php
namespace Freshbyte\Vendor\Controller\adminhtml\Posts;

use Freshbyte\Vendor\Controller\adminhtml\Posts;

class NewAction extends Posts
{
    /**
     * Create new news action
     *
     * @return void
     */
    public function execute()
    {
        $this->_forward('edit');
    }
}
