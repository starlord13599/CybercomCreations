<?php
require_once "./Modal/Core/Adapter.php";
require_once "./Controller/Core/Admin.php";

class Customer extends Admin
{
    public $customerId = null;
    public $firstName = null;
    public $lastName = null;
    public $email = null;
    public $phone = null;
    public $password = null;
    public $status = null;
    public $customers = null;
    // public $updatedDate = date("Y-m-d H:i:s");

    public function addCustomer()
    {
        $sql = new Adapter;
        $stmt = "INSERT INTO
                `customer` (firstName,lastName,email,phone,password,status)
                VALUES
                ('$this->firstName','$this->lastName','$this->email','$this->phone','$this->password','$this->status')";

        return $sql->insert($stmt);
    }

    public function setCustomer($customers)
    {
        $this->customers = $customers;
        return $this->customers;
    }

    public function getCustomers()
    {
        $sql = new Adapter;
        $stmt = "SELECT * FROM `customer`";
        $data =  $sql->fetchAll($stmt);
        return $this->setCustomer($data);
    }

    public function getCustomerById()
    {
        $sql = new Adapter;
        $stmt = "SELECT * FROM `customer` WHERE customerId='$this->customerId'";
        return $sql->fetchRow($stmt);
    }

    public function updateCustomer()
    {
        $sql = new Adapter;
        $stmt = "UPDATE `customer` SET `firstName` = '$this->firstName',
         `lastName` = '$this->lastName', `email` = '$this->email',
         `phone` = '$this->phone', `password` = '$this->password',
         `status` = '$this->status' WHERE `customer`.`customerId` = '$this->customerId'";
        return $sql->update($stmt);
    }

    public function deleteCustomer()
    {
        $sql = new Adapter;
        $stmt = "DELETE FROM `customer` WHERE customerId = '$this->customerId'";
        return  $sql->delete($stmt);
    }

    public function grid()
    {
        $data = $this->getCustomers();
        require_once "./View/customer/grid.php";
    }

    public function form()
    {
        require_once "./View/customer/form.php";
    }

    public function saveForm()
    {

        if ($this->request->isPost()) {

            $this->firstName = $this->request->getPost('firstName');
            $this->lastName = $this->request->getPost('lastName');
            $this->email = $this->request->getPost('email');
            $this->phone = $this->request->getPost('phone');
            $this->password = $this->request->getPost('password');
            $this->status = $this->request->getPost('status');

            $this->addCustomer();

            $this->redirect(null, 'grid');
        }
        echo "invalid Request";
    }

    public function updateForm()
    {
        $this->customerId = intval($_GET['id']);
        $data = $this->getCustomerById();
        require_once "./View/customer/updateForm.php";
    }

    public function update()
    {
        if ($this->request->isPost()) {

            $this->customerId = (int) $this->request->getGet('id');
            $this->firstName = $this->request->getPost('firstName');
            $this->lastName = $this->request->getPost('lastName');
            $this->email = $this->request->getPost('email');
            $this->phone = $this->request->getPost('phone');
            $this->password = $this->request->getPost('password');
            $this->status = $this->request->getPost('status');

            $this->updateCustomer();

            $this->redirect(null, 'grid');
        }
        echo "invalid Request";
    }

    public function delete()
    {
        $_POST = json_decode(file_get_contents("php://input"), true);
        $this->customerId = $_POST['id'];
        $this->deleteCustomer();
    }
}
