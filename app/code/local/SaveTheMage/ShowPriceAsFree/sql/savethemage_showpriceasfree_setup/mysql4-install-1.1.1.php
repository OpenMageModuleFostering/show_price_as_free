<?php
/**
 * savethemage_showpriceasfree install script
 * 
 * PHP version 5.3
 * 
 * @category  showpriceasfree
 * @package   SaveTheMage_ShowPriceAsFree
 * @author    Rezoanul Alam @ www.savethemage.com
 * @copyright 2013 www.savethemage.com
 * @license   
 * @version   1.1.1
 * @link      http://www.savethemage.com/
 *
 */

$installer = $this;

$installer->startSetup();


$installer->run("
        DELETE FROM {$this->getTable('core_config_data')} 
            WHERE path LIKE 'ShowPriceAsFree_options/Config/%' ;
 
        INSERT INTO {$this->getTable('core_config_data')} 
            ( scope_id, path, value )
            VALUES( 0, 'ShowPriceAsFree_options/Config/Enabled' , '1' ) ;
            
        ");
 
$installer->endSetup();