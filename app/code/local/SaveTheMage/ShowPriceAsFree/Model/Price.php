<?php

/**
 * SaveTheMage_ShowPriceAsFree_Model Price
 * 
 * PHP version 5.3
 * 
 * @category  ShowPriceAsFree
 * @package   SaveTheMage_ShowPriceAsFree
 * @author    Rezoanul Alam @ www.savethemage.com
 * @copyright 2013 www.savethemage.com
 * @license   
 * @version   1.1.1
 * @link      http://www.savethemage.com/
 *
 */


class SaveTheMage_ShowPriceAsFree_Model_Price{

    private $config_Enabled = '';

    private function _construct() {
        
        $path = 'ShowPriceAsFree_options/Config/Enabled';
        $this->config_Enabled = Mage::getStoreConfig($path); 

    }

    public function _toHtml( $price ){
        $this->_construct();

        if( $price == 0 && $this->config_Enabled == "1" ){
            return "FREE";
        }
        
        return NULL;
    }

}
