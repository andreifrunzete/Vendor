<?php
namespace Freshbyte\Vendor\Controller\adminhtml\Posts;

use Freshbyte\Vendor\Controller\adminhtml\Posts;

class Delete extends Posts
{
    public function execute()
    {
        $postId = (int) $this->getRequest()->getParam('id');

        if ($postId) {
            /** @var $postModel \Freshbyte\Vendor\Model\Vendor */
            $postModel = $this->_postsFactory->create();
            $postModel->load($postId);

            // Check this if vendor exists or not
            if (!$postModel->getId()) {
                $this->messageManager->addError(__('This vendor no longer exists.'));
            } else {
                try {
                    // Delete Vendor
                    $postModel->delete();
                    $this->messageManager->addSuccess(__('The vendor has been deleted.'));

                    // Redirect to grid page
                    $this->_redirect('*/*/');
                    return;
                } catch (\Exception $e) {
                    $this->messageManager->addError($e->getMessage());
                    $this->_redirect('*/*/edit', ['id' => $postModel->getId()]);
                }
            }
        }
    }
}
