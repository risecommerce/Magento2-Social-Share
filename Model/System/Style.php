<?php
/**
 * Class Style
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


class Style extends OptionArray
{
    const HORIZONTAL = "horizontal";
    const VERTICAL   = "vertical";

    /**
     * Get options
     *
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::HORIZONTAL => __('Horizontal'),
            self::VERTICAL   => __('Vertical'),
        ];
    }
}
