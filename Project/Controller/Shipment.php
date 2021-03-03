<?php
Mage::loadFileByClassName('controller_core_admin');

class Controller_Shipment extends Controller_Core_Admin
{


    public function gridHtmlAction()
    {
        $grid = Mage::getBlock('Block_shipment_Grid')->toHtml();

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

        $edit = Mage::getBlock('Block_shipment_edit')->toHtml();
        $tabs = Mage::getBlock('Block_shipment_edit_tabs')->toHtml();

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

                $shipment = Mage::getModel('model_shipment');
                $id = (int)$this->getRequest()->getGet('id');

                if ($id) {
                    $result = $shipment->load($id);
                    if (!$result) {
                        throw new Exception('record not found');
                    }
                } else {
                    $shipment->createdDate = date('Y-m-d H:i:s');
                }

                $shipment->setData($this->getRequest()->getPost('shipment'));


                if (!$shipment->save()) {
                    $this->getMessage()->setFailure('Unable to insert');
                } else {
                    $this->getMessage()->setSuccess('Inserted Successfully');
                }

                $this->redirect('shipment', 'index', null, true);
                die;
            }
            throw new Exception("Invalid Request");
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('shipment', 'index', null, true);
        }
    }

    public function deleteAction()
    {
        try {
            if (!$this->getRequest()->isPost()) {

                $shipmentId = (int) $this->getRequest()->getGet('id');
                $shipment = Mage::getModel('model_shipment');

                if ($shipmentId) {
                    $result = $shipment->load($shipmentId);
                }

                if (!$result) {
                    throw new Exception("Record Not Found");
                }

                if ($shipment->delete()) {
                    $this->getMessage()->setSuccess('Deleted Successfully');
                }

                $this->redirect('shipment', 'index', null, true);
            } else {
                throw new Exception('Invalid Request');
            }
        } catch (Exception $e) {

            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('shipment', 'index', null, true);
        }
    }
}
