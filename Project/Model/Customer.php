<?php
Mage::loadFileByClassName('Model_Core_Table');

class Model_Customer extends Model_Core_Table
{
    const STATUS_ENABLE = 1;
    const STATUS_DISABLE = 0;

    const GROUP_RETAIL = 1;
    const GROUP_WHOLESALE = 0;

    public function __construct()
    {
        parent::__construct();
        $this->setTableName('customer');
        $this->setPrimaryKey('customerId');
    }

    public function getStatusOptions()
    {
        return [
            self::STATUS_ENABLE => "Enable",
            self::STATUS_DISABLE => "Disable"
        ];
    }

    public function getGroupOptions()
    {
        return [
            self::GROUP_RETAIL => "Retail",
            self::GROUP_WHOLESALE => "Wholesale"
        ];
    }
}
