<?php
/**
 * Class CmsPages
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

use Magento\Cms\Model\ResourceModel\Page\CollectionFactory as PageFactory;

class CmsPages extends OptionArray
{
    /**
     * PageFactory
     *
     * @var \Magento\Cms\Model\PageFactory
     */
    protected $_pageFactory;

    /**
     * CmsPages constructor.
     *
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function getOptionHash()
    {
        $pages = $this->_pageFactory->create();
        $cmsPages = [];

        foreach ($pages as $page) {
            $cmsPages[$page->getId()] = $page->getTitle();
        }

        return $cmsPages;
    }
}
