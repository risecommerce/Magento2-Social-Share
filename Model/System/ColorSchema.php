<?php
/**
 * Class ColorSchema
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


class ColorSchema extends OptionArray
{
    const ORIGINAL = "default";
    const CUSTOM = "custom";

    /**
     * Get options
     *
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::ORIGINAL => __('Default Social Icon'),
            self::CUSTOM => __('Custom Color Icon')
        ];
    }
}
