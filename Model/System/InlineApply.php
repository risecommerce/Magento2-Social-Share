<?php
/**
 * Class InlineApply
 *
 * PHP version 7
 *
 * @category Risecommerce
 * @package  Risecommerce_SocialShare
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */
namespace Risecommerce\SocialShare\Model\System;

class InlineApply extends OptionArray
{
    const CATEGORY_PAGE = "category_page";
    const PRODUCT_PAGE  = "product_page";

    /**
     * Get options
     *
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::CATEGORY_PAGE => __('Categories Page'),
            self::PRODUCT_PAGE  => __('Products Page'),
        ];
    }
}
