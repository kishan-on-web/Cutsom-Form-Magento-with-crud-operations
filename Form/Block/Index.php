<?php
namespace KK\Form\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Index extends Template
{
    protected $scopeConfig;

    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig,
    array $data = []
    )
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

public function IsEnabled(){
    return $this->scopeConfig->getValue('kk_form/general/is_active',
    ScopeInterface::SCOPE_STORE);
}

public function getFormAction(){
    return $this->getUrl('myform/index/submit', ['_secure' => true]);
}

}
