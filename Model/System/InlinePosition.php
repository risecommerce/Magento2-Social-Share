<?php
/**
 * Class InlinePosition
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


class InlinePosition extends OptionArray
{
    const TOP_CONTENT    = "top_content";
    const BOTTOM_CONTENT = "bottom_content";
    const NONE = "none";

    /**
     * Get options
     *
     * @return array
     */
    public function getOptionHash()
    {
        return [
            self::TOP_CONTENT    => __('Top Content'),
            self::BOTTOM_CONTENT => __('Bottom Content'),
            self::NONE => __('None'),
        ];
    }
}
