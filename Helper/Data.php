<?php
/**
 * Copyright (c) 2024 - Kevin casasbuenas (https://kincasasbuenas.dev/)
 * @author      Kevin Casasbuenas <kincasasbuenas@outlook.com>
 * @category    Kinuz
 * @module      Kinuz/ProductBadgePercentage
 */

declare(strict_types=1);

namespace Kinuz\ProductBadgePercentage\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * 
 * Helper class
 */
class Data extends AbstractHelper
{

    protected $scopeConfig;

    /**
     * Constructor
     *
     * @param Context $context
     * @param StoreManagerInterface $storeManager
     */
    public function __construct( 
        Context $context,
        protected StoreManagerInterface $storeManager
    ){
        parent::__construct($context);
    }

     /**
     * Retrieves the active status of the product badge percentage configuration.
     *
     * @return bool Returns true if the product badge percentage is enabled for the current store, false otherwise.
     */
    public function isActive()
    {
        return $this->scopeConfig->getValue(
            'product_badge_percentage/general/enable',
            ScopeInterface::SCOPE_STORE, $this->getStoreId());
    }

    /**
     * Retrieves the ID of the current store.
     *
     * @return int The ID of the current store.
     */
    public function getStoreId()
    {
        return $this->storeManager->getStore()->getId();
    }
}