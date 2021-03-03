<?php
Mage::loadFileByClassName('controller_core_admin');

class Controller_Product extends Controller_Core_Admin
{

    public function gridHtmlAction()
    {
        $grid = Mage::getBlock('Block_Product_Grid')->toHtml();

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

    // public function formAction()
    // {
    //     try {

    //         $layout = $this->getLayout();
    //         // $layout->setTemplate('View/core/layout/threeColumn.php');

    //         $this->renderLayout();
    //     } catch (Exception $e) {
    //         echo 'Message:-' . $e->getMessage();
    //     }
    // }

    public function showAction()
    {

        $edit = Mage::getBlock('Block_product_edit')->toHtml();
        $tabs = Mage::getBlock('Block_product_edit_tabs')->toHtml();

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

                $product = Mage::getModel('Model_Product');
                $id = (int)$this->getRequest()->getGet('id');
                if ($id) {

                    $result = $product->load($id);
                    if (!$result) {
                        throw new Exception("Record Not Found");
                    }

                    $product->updatedDate = date('Y-m-d H:i:s');
                } else {

                    $product->createdDate = date('Y-m-d H:i:s');
                    $product->updatedDate = date('Y-m-d H:i:s');
                }

                $product->setData($this->getRequest()->getPost('product'));


                if (!$product->save()) {
                    $this->getMessage()->setFailure('Unable to insert');
                } else {
                    $this->getMessage()->setSuccess('Inserted Successfully');
                }

                $this->redirect('product', 'index', null, true);
                die;
            }
            throw new Exception("Invalid Request");
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('product', 'index', null, true);
        }
    }

    public function deleteAction()
    {

        try {
            if (!$this->getRequest()->isPost()) {

                $productId = (int) $this->getRequest()->getGet('id');
                $product = Mage::getModel('model_product');

                if ($productId) {
                    $result = $product->load($productId);
                }

                if (!$result) {
                    throw new Exception("Record Not Found");
                }

                if ($product->delete()) {
                    $this->getMessage()->setSuccess('Deleted Successfully');
                }

                $this->redirect('product', 'index', null, true);
            } else {
                throw new Exception('Invalid Request');
            }
        } catch (Exception $e) {

            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('product', 'index', null, true);
        }
    }
}
