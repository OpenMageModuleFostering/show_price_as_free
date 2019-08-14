<?php
class SaveTheMage_ShowPriceAsFree_Helper_Product extends Mage_Core_Helper_Data {
    public static function currency( $price , $format=true , $includeContainer = true )
    {
        $modelPrice = Mage::getModel('ShowPriceAsFree/Price');
        if( empty( $modelPrice ) ){
            require_once ( Mage::getBaseDir('app') . '/code/local/SaveTheMage/ShowPriceAsFree/Model/Price.php');
            $modelPrice = new SaveTheMage_ShowPriceAsFree_Model_Price();
        }

        $retval = $modelPrice->_toHtml( $price );
        return $retval == NULL ? parent::currency( $price, $format=true, $includeContainer = true ) : $retval;
            
    }
}
?>