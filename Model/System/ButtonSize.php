<?php
/**
 * Class ButtonSize
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

class ButtonSize extends OptionArray
{
    const SMALL  = "16x16";
    const MEDIUM = "32x32";
    const LARGE  = "64x64";

    /**
     * Get options
     *
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::SMALL  => __('16x16'),
            self::MEDIUM => __('32x32'),
            self::LARGE  => __('64x64'),
        ];
    }
}
