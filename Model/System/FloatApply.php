<?php
/**
 * Class FloatApply
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

class FloatApply extends OptionArray
{
    const ALL_PAGES    = "all_pages";
    const SELECT_PAGES = "select_pages";

    /**
     * Get options
     *
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::ALL_PAGES    => __('All Pages'),
            self::SELECT_PAGES => __('Select Pages')
        ];
    }
}
