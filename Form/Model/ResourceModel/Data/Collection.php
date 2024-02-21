<?php
namespace KK\Form\Model\ResourceModel\Data;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('KK\Form\Model\Data', 'KK\Form\Model\ResourceModel\Data');
    }
}
