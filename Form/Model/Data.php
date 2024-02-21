<?php
namespace KK\Form\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Data extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('KK\Form\Model\ResourceModel\Data');
    }
}
