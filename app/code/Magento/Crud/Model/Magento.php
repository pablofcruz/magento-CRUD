<?php
namespace Magento\Crud\Model;

class Magento extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magento\Crud\Model\ResourceModel\Magento');
    }
}
?>