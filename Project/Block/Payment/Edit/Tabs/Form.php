<?php

Mage::loadFileByClassName('block_core_template');

class Block_Payment_Edit_Tabs_Form extends Block_Core_Template
{
    protected $payment = null;

    public function __construct()
    {
        $this->setTemplate('View/payment/edit/tabs/form.php');
    }

    public function setPayment($payment = null)
    {
        if ($payment) {
            $this->payment = $payment;
        }

        $payment = Mage::getModel('model_payment');

        if ($id = (int) $this->getRequest()->getGet('id')) {
            $payment = $payment->load($id);
        }

        $this->payment = $payment;
        return $this;
    }

    public function getPayment()
    {
        if (!$this->payment) {
            $this->setPayment();
        }

        return $this->payment;
    }

    public function getTitle()
    {
        if ((int) $this->getUrl()->getRequest()->getGet('id')) {
            return 'Update Payment';
        }
        return 'Create Payment';
    }
}
