<?php
Mage::loadFileByClassName('controller_core_admin');


class Controller_Category extends Controller_Core_Admin
{

    public function gridHtmlAction()
    {
        $grid = Mage::getBlock('Block_Category_Grid')->toHtml();

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

        $edit = Mage::getBlock('Block_category_edit')->toHtml();
        $tabs = Mage::getBlock('Block_category_edit_tabs')->toHtml();

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

                $category = Mage::getModel('model_category');
                $id = (int)$this->getRequest()->getGet('id');

                if ($id) {
                    $result = $category->load($id);
                    if (!$result) {
                        throw new Exception('record not found');
                    }
                }
                $category->setData($this->getRequest()->getPost('category'));

                if (!$category->save()) {
                    $this->getMessage()->setFailure('Unable to insert');
                } else {
                    $this->getMessage()->setSuccess('Inserted Successfully');
                }

                $this->redirect('category', 'index', null, true);
                die;
            }
            throw new Exception("Invalid Request");
        } catch (Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('category', 'index', null, true);
        }
    }

    public function deleteAction()
    {
        try {
            if (!$this->getRequest()->isPost()) {

                $categoryId = (int) $this->getRequest()->getGet('id');
                $category = Mage::getModel('model_category');

                if ($categoryId) {
                    $result = $category->load($categoryId);
                }

                if (!$result) {
                    throw new Exception("record Not found");
                }


                if ($category->delete()) {
                    $this->getMessage()->setSuccess('Deleted Successfully');
                }

                $this->redirect('category', 'index', null, true);
            } else {
                throw new Exception('Invalid Request');
            }
        } catch (Exception $e) {

            $this->getMessage()->setFailure($e->getMessage());
            $this->redirect('category', 'index', null, true);
        }
    }
}
