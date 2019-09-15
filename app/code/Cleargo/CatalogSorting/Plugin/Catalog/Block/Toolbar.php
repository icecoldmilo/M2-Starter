<?php
namespace Cleargo\CatalogSorting\Plugin\Catalog\Block;

class Toolbar
{

    /**
    * Plugin
    *
    * @param \Magento\Catalog\Block\Product\ProductList\Toolbar $subject
    * @param \Closure $proceed
    * @param \Magento\Framework\Data\Collection $collection
    * @return \Magento\Catalog\Block\Product\ProductList\Toolbar
    */
    public function aroundSetCollection(
    \Magento\Catalog\Block\Product\ProductList\Toolbar $subject,
    \Closure $proceed,
    $collection
    ) {
    $currentOrder = $subject->getCurrentOrder();
    $result = $proceed($collection);

    switch ($currentOrder) {

        case 'high_to_low':
            $subject->getCollection()->setOrder('price', 'desc');
            break;
        case 'low_to_high':
            $subject->getCollection()->setOrder('price', 'asc');
            break;
        case 'a_to_z':
            $subject->getCollection()->setOrder('name', 'asc');
            break;
        case 'z_to_a':
            $subject->getCollection()->setOrder('name', 'desc');
            break;
    }

    return $result;
    }

}