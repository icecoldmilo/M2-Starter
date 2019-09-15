<?php

namespace Cleargo\CatalogSorting\Plugin\Catalog\Model;

class Config
{
    public function afterGetAttributeUsedForSortByArray(
    \Magento\Catalog\Model\Config $catalogConfig,
    $options
    ) {
    	unset($options['price']);
        $options['low_to_high'] = __('Price (Low - High)');
        $options['high_to_low'] = __('Price (High - Low)');
        unset($options['name']);
        $options['a_to_z'] = __('Name (A - Z)');
        $options['z_to_a'] = __('Name (Z - A)');
        return $options;

    }

}