<?php

namespace Magento\Crud\Model\ResourceModel\Magento;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magento\Crud\Model\Magento', 'Magento\Crud\Model\ResourceModel\Magento');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>