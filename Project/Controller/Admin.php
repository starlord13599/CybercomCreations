<?php
Mage::loadFileByClassName('controller_core_admin');

class Controller_Admin extends Controller_Core_Admin
{


    public function gridHtmlAction()
    {
        $grid = Mage::getBlock('Block_Admin_Grid')->toHtml();

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

        $edit = Mage::getBlock('Block_admin_edit')->toHtml();
        $tabs = Mage::getBlock('Block_admin_edit_tabs')->toHtml();

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

                $admin = Mage::getModel('model_admin');
                $id = (int)$this->getRequest()->getGet('id');
                if ($id) {
                    $result = $admin->load($id);
                    if (!$result) {
                        throw new Exception('record not found');
                    }
                } else {
                    $admin->createdDate = date('Y-m-d H:i:s');
                }
                $admin->setData($this->getRequest()->getPost('admin'));

                if (!$admin->save()) {
                    $this->getMessage()->setFailure('Unable to insert');
                } else {
                    $this->getMessage()->setSuccess('Inserted Successfully');
                }

                $this->redirect('admin', 'index', null, true);
                die;
            }
            throw new Exception("Invalid Request");
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('admin', 'index', null, true);
        }
    }

    public function deleteAction()
    {
        try {
            if (!$this->getRequest()->isPost()) {

                $adminId = (int) $this->getRequest()->getGet('id');
                $admin = Mage::getModel('model_admin');

                if ($adminId) {
                    $result = $admin->load($adminId);
                }

                if (!$result) {
                    throw new Exception("record Not found");
                }


                if ($admin->delete()) {
                    $this->getMessage()->setSuccess('Deleted Successfully');
                }

                $this->redirect('admin', 'index', null, true);
            } else {
                throw new Exception('Invalid Request');
            }
        } catch (Exception $e) {

            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('admin', 'index', null, true);
        }
    }
}
