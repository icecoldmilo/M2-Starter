<?php
namespace Cleargo\Catalog\Plugin\Swatches\Block\Product\Renderer;
 
class Configurable
{
    public function afterGetJsonConfig(\Magento\Swatches\Block\Product\Renderer\Configurable $subject, $result) {
 
        $jsonResult = json_decode($result, true);
        $jsonResult['skus'] = [];
 
        foreach ($subject->getAllowProducts() as $simpleProduct) {
           $jsonResult['skus'][$simpleProduct->getId()] = $simpleProduct->getSku();
        }
        $result = json_encode($jsonResult);
        return $result;
	}
}