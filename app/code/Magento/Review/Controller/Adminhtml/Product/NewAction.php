<?php
/**
 *
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Review\Controller\Adminhtml\Product;

class NewAction extends \Magento\Review\Controller\Adminhtml\Product
{
    /**
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('Magento_Review::catalog_reviews_ratings_reviews_all');
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Customer Reviews'));
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('New Review'));

        $this->_addContent($this->_view->getLayout()->createBlock('Magento\Review\Block\Adminhtml\Add'));
        $this->_addContent($this->_view->getLayout()->createBlock('Magento\Review\Block\Adminhtml\Product\Grid'));

        $this->_view->renderLayout();
    }
}
