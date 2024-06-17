<?php
/**
 * Copyright (c) 2024 - Kevin casasbuenas (https://kincasasbuenas.dev/)
 * @author      Kevin Casasbuenas <kincasasbuenas@outlook.com>
 * @category    Kinuz
 * @module      Kinuz/ProductBadgePercentage
 */

declare(strict_types=1);

namespace Kinuz\ProductBadgePercentage\Pricing\Render;

use Magento\Catalog\Pricing\Render\FinalPriceBox as OriginalFinalPriceBox;
use Kinuz\ProductBadgePercentage\Helper\Data;
use Magento\Catalog\Model\Product\Pricing\Renderer\SalableResolverInterface;
use Magento\Catalog\Pricing\Price\MinimalPriceCalculatorInterface;
use Magento\Framework\Pricing\Price\PriceInterface;
use Magento\Framework\Pricing\Render\RendererPool;
use Magento\Framework\Pricing\SaleableInterface;
use Magento\Framework\View\Element\Template\Context;

/** 
 * 
 * FinalPriceBox class
 * 
 */
class FinalPriceBox extends OriginalFinalPriceBox
{

    /**
     * Constructor.
     *
     * @param Context $context
     * @param SaleableInterface $saleableItem
     * @param PriceInterface $price
     * @param RendererPool $rendererPool
     * @param array $data
     * @param SalableResolverInterface $salableResolver
     * @param MinimalPriceCalculatorInterface $minimalPriceCalculator
     * @param Data $helperData
     */
      public function __construct(
        Context $context,
        SaleableInterface $saleableItem,
        PriceInterface $price,
        RendererPool $rendererPool,
        array $data = [],
        SalableResolverInterface $salableResolver = null,
        MinimalPriceCalculatorInterface $minimalPriceCalculator = null,
        protected Data $helperData
    ) {
        parent::__construct($context, $saleableItem, $price, $rendererPool, $data, $salableResolver, $minimalPriceCalculator);
    } 

    /**
     * Get Final Price HTML
     *
     * @return string
     */
    protected function _toHtml()
    {
        if($this->helperData->isActive()){
            $this->setTemplate('Kinuz_ProductBadgePercentage::product/price/final_price.phtml');
        }
        return parent::_toHtml();
    }
}