<?php
/**
 * Class FloatPosition
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


 
class FloatPosition extends OptionArray
{
    const LEFT  = "left";
    const RIGHT = "right";

    /**
     * Get options
     *
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::LEFT  => __('Left'),
            self::RIGHT => __('Right'),
        ];
    }
}
