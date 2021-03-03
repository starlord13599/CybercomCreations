<?php
Mage::loadFileByClassName('controller_core_admin');


class Controller_Payment extends Controller_Core_Admin
{

    public function gridHtmlAction()
    {
        $grid = Mage::getBlock('Block_payment_Grid')->toHtml();

        $response = [
            'status' => 'success',
            'element' => [
                [
                    'selector' => '#contentHtml',
                    'htmlcontent' => $grid
                ],
                [
                    'selector' => '#leftHtml',
                    'htmlcontent' => ''
                ],
            ]
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    }


    public function indexAction()
    {
        $this->renderLayout();
    }


    public function showAction()
    {

        $edit = Mage::getBlock('Block_payment_edit')->toHtml();
        $tabs = Mage::getBlock('Block_payment_edit_tabs')->toHtml();

        $response = [
            'status' => 'success',
            'element' => [
                [
                    'selector' => '#contentHtml',
                    'htmlcontent' => $edit
                ],
                [
                    'selector' => '#leftHtml',
                    'htmlcontent' => $tabs
                ],
            ]
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function addAction()
    {
        date_default_timezone_set('Asia/Kolkata');
        try {
            if ($this->getRequest()->isPost()) {

                $payment = Mage::getModel('model_payment');
                $id = (int)$this->getRequest()->getGet('id');

                if ($id) {
                    $result = $payment->load($id);
                    if (!$result) {
                        throw new Exception('record not found');
                    }
                } else {
                    $payment->createdDate = date('Y-m-d H:i:s');
                }
                $payment->setData($this->getRequest()->getPost('payment'));

                if (!$payment->save()) {
                    $this->getMessage()->setFailure('Unable to insert');
                } else {
                    $this->getMessage()->setSuccess('Inserted Successfully');
                }

                $this->redirect('payment', 'index', null, true);
                die;
            }
            throw new Exception("Invalid Request");
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('payment', 'index', null, true);
        }
    }

    public function deleteAction()
    {
        try {
            if (!$this->getRequest()->isPost()) {

                $paymentId = (int) $this->getRequest()->getGet('id');
                $payment = Mage::getModel('model_payment');

                if ($paymentId) {
                    $result = $payment->load($paymentId);
                }

                if (!$result) {
                    throw new Exception("record Not found");
                }

                if ($payment->delete()) {
                    $this->getMessage()->setSuccess('Deleted Successfully');
                }

                $this->redirect('payment', 'index', null, true);
            } else {
                throw new Exception('Invalid Request');
            }
        } catch (Exception $e) {

            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('payment', 'index', null, true);
        }
    }
}
