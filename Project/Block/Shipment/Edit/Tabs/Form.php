<?php

Mage::loadFileByClassName('block_core_template');

class Block_Shipment_Edit_Tabs_Form extends Block_Core_Template
{

    protected $shipment = null;

    public function __construct()
    {
        $this->setTemplate('View/shipment/edit/tabs/form.php');
    }

    public function setShipment($shipment = null)
    {
        if ($shipment) {
            $this->shipment = $shipment;
        }

        $shipment = Mage::getModel('model_shipment');

        if ($id = (int) $this->getRequest()->getGet('id')) {
            $shipment = $shipment->load($id);
        }

        $this->shipment = $shipment;
        return $this;
    }

    public function getShipment()
    {
        if (!$this->shipment) {
            $this->setShipment();
        }

        return $this->shipment;
    }
    public function getTitle()
    {
        if ($id = (int) $this->getUrl()->getRequest()->getGet('id')) {
            return 'Update Shipment';
        }
        return 'Create Shipment';
    }
}
