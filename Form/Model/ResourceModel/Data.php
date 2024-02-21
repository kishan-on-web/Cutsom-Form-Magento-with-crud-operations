<?php
namespace KK\Form\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Data extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('kk_custom_table', 'id');
    }
}
