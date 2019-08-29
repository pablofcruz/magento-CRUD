<?php
namespace Magento\Crud\Model\ResourceModel;

class Magento extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('user', 'user_id');
    }
}
?>