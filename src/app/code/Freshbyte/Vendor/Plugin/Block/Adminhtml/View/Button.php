<?php
namespace Freshbyte\Vendor\Plugin\Block\Adminhtml\View;

use Magento\Sales\Block\Adminhtml\Order\View as OrderView;

class Button
{
    public function beforeSetLayout(OrderView $subject)
    {
        $subject->addButton(
            'order_custom_button',
            [
                'label' => __('Add New Vendor'),
                'class' => __('custom-button'),
                'id' => 'order-view-custom-button',
//                'onclick' => 'setLocation(\'' . $subject->getUrl('routes/controller/action') . '\')'
                'onclick' => 'setLocation(\'' . $subject->getUrl('Freshbyte\Vendor\Block\Adminhtml\Posts\Edit\Tab\Tabs') . '\')'

            ]
        );
    }
}
