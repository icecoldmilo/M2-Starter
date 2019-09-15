var config = {
    config: {
        mixins: {
            'Magento_ConfigurableProduct/js/configurable': {
                'Cleargo_Catalog/js/model/skuswitch': true
            },
            'Magento_Swatches/js/swatch-renderer': {
                'Cleargo_Catalog/js/model/swatch-skuswitch': true
            }
        }
	}
};