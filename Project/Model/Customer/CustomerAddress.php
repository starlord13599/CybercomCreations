<?php

Mage::getModel('model_core_table');

class Model_Customer_CustomerAddress extends Model_Core_Table
{
    public function __construct()
    {
        parent::__construct();
        $this->setTableName('customer_address');
        $this->setPrimaryKey('customerId');
    }
}
