<?php
namespace Magento\Crud\Block\Adminhtml\Magento\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('magento_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Magento Information'));
    }
}