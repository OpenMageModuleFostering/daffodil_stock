<?php

class Daffodil_Stock_Block_Stock extends Mage_Core_Block_Template {

    public function getQuantity() {
        $_product = Mage::registry('current_product');
        $_invAmt = (int) Mage::getModel('cataloginventory/stock_item')->loadByProduct($_product)->getQty();
        return $_invAmt;
    }
    
    public function getStoreconfig(){
        $mystock = Mage::getStoreConfig('stock/all_settings/stock_items');
        $lowmessage = Mage::getStoreConfig('stock/all_settings/stock_msg');
        $stockValues = array('mystock'=>$mystock, 'lowmessage'=>$lowmessage);
        return $stockValues;
    }

}

?>
