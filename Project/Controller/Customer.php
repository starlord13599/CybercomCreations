<?php
Mage::loadFileByClassName('controller_core_admin');


class Controller_Customer extends Controller_Core_Admin
{

    public function gridHtmlAction()
    {
        $grid = Mage::getBlock('Block_Customer_Grid')->toHtml();

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

        $edit = Mage::getBlock('Block_customer_edit')->toHtml();
        $tabs = Mage::getBlock('Block_customer_edit_tabs')->toHtml();

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

                $customer = Mage::getModel('model_customer');
                $id = (int)$this->getRequest()->getGet('id');

                if ($id) {
                    $result = $customer->load($id);
                    if (!$result) {
                        throw new Exception('record not found');
                    }
                    $customer->updatedDate = date('Y-m-d H:i:s');
                } else {
                    $customer->createdDate = date('Y-m-d H:i:s');
                    $customer->updatedDate = date('Y-m-d H:i:s');
                }

                $customer->setData($this->getRequest()->getPost('customer'));

                if (!$customer->save()) {
                    $this->getMessage()->setFailure('Unable to insert');
                } else {
                    $this->getMessage()->setSuccess('Inserted Successfully');
                }

                $this->redirect('customer', 'index', null, true);
                die;
            }
            throw new Exception("Invalid Request");
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('customer', 'index', null, true);
        }
    }

    public function deleteAction()
    {
        try {
            if (!$this->getRequest()->isPost()) {

                $customerId = (int) $this->getRequest()->getGet('id');
                $customer = Mage::getModel('model_customer');

                if ($customerId) {
                    $result = $customer->load($customerId);
                }

                if (!$result) {
                    throw new Exception("record Not found");
                }


                if ($customer->delete()) {
                    $this->getMessage()->setSuccess('Deleted Successfully');
                }

                $this->redirect('customer', 'index', null, true);
            } else {
                throw new Exception('Invalid Request');
            }
        } catch (Exception $e) {

            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('customer', 'index', null, true);
        }
    }
}
