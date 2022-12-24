<?php
/**
 * Class DisplayMenuType
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


class DisplayMenuType extends OptionArray
{
    const ON_HOVER = "hover";
    const ON_CLICK = "click";

    /**
     * Get options
     *
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::ON_HOVER => __('Hover'),
            self::ON_CLICK => __('Click'),
        ];
    }
}
