<?php
require_once "./Modal/Core/Adapter.php";
require_once "./Controller/Core/Admin.php";

class Category extends Admin
{
    public $categoryId = null;
    public $name = null;
    public $status = null;
    public $description = null;


    public function addCategory()
    {
        $sql = new Adapter;
        $stmt = "INSERT INTO
                `category` (name,description,status)
                VALUES
                ('$this->name','$this->description','$this->status')";
        return $sql->insert($stmt);
    }

    public function getCategories()
    {
        $sql = new Adapter;
        $stmt = "SELECT * FROM `category`";
        return $sql->fetchAll($stmt);
    }

    public function getCategoryById()
    {
        $sql = new Adapter;
        $stmt = "SELECT * FROM `category` WHERE categoryId='$this->categoryId'";
        return $sql->fetchRow($stmt);
    }

    public function updateCategory()
    {
        $sql = new Adapter;
        $stmt = "UPDATE `category` SET `name` = '$this->name',
         `description` = '$this->description',
         `status` = '$this->status' WHERE `category`.`categoryId` = '$this->categoryId'";
        return $sql->update($stmt);
    }

    public function deleteCategory()
    {
        $sql = new Adapter;
        $stmt = "DELETE FROM `category` WHERE categoryId = '$this->categoryId'";
        return $sql->delete($stmt);
    }

    public function grid()
    {
        $data = $this->getCategories();
        require_once "./View/category/grid.php";
    }

    public function form()
    {
        require_once "./View/category/form.php";
    }

    public function saveForm()
    {
        if ($this->request->isPost()) {

            $this->name = $this->request->getPost('name');
            $this->description = $this->request->getPost('description');
            $this->status = $this->request->getPost('status');

            $this->addCategory();

            $this->redirect(null, 'grid');
        }

        echo "Invalid Request";
    }

    public function updateForm()
    {
        $this->categoryId = $this->request->getGet('id');
        $data = $this->getCategoryById();
        require_once "./View/category/updateForm.php";
    }

    public function update()
    {
        if ($this->request->isPost()) {

            $this->categoryId = $this->request->getGet('id');
            $this->name = $this->request->getPost('name');
            $this->description = $this->request->getPost('description');
            $this->status = $this->request->getPost('status');

            $this->updateCategory();

            $this->redirect(null, 'grid', null, true);
        }

        echo "Invalid Request";
    }

    public function delete()
    {
        $_POST = json_decode(file_get_contents("php://input"), true);
        $this->categoryId = $_POST['id'];
        $this->deleteCategory();
    }
}
