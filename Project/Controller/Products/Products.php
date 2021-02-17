<?php
require_once "./Modal/Core/Adapter.php";
require_once "./Controller/Core/Admin.php";
class Products extends Admin
{
    public $productId = null;
    public $name = null;
    public $price = null;
    public $discount = null;
    public $quantity = null;
    public $description = null;
    public $status = null;
    public $products = [];

    public function addProduct()
    {
        $sql = new Adapter;
        $stmt = "INSERT INTO
                `products` (name,price,discount,quantity,description,status)
                VALUES
                ('$this->name','$this->price','$this->discount','$this->quantity','$this->description','$this->status')";

        return $sql->insert($stmt);
    }

    public function setProducts($products)
    {
        $this->products = $products;
        return $this->products;
    }

    public function getProducts()
    {
        $sql = new Adapter;
        $stmt = "SELECT * FROM `products`";
        $products = $sql->fetchAll($stmt);
        return $this->setProducts($products);
    }

    public function getProductById()
    {
        $sql = new Adapter;
        $stmt = "SELECT * FROM `products` WHERE productId='$this->productId'";
        return $sql->fetchRow($stmt);
    }

    public function updateProduct()
    {
        $sql = new Adapter;
        $stmt = "UPDATE `products` SET `name` = '$this->name',
         `price` = '$this->price', `discount` = '$this->discount',
         `quantity` = '$this->quantity', `description` = '$this->description',
         `status` = '$this->status' WHERE `products`.`productId` = '$this->productId'";
        return $sql->update($stmt);
    }

    public function deleteProduct()
    {
        $sql = new Adapter;
        $stmt = "DELETE FROM `products` WHERE productId = '$this->productId'";
        return $sql->delete($stmt);
    }

    public function grid()
    {
        $data = $this->getProducts();
        require_once "./View/products/grid.php";
    }

    public function form()
    {
        require_once "./View/products/form.php";
    }

    public function saveForm()
    {
        if ($this->request->isPost()) {

            $this->name = $this->request->getPost('name');
            $this->price = $this->request->getPost('price');
            $this->discount = $this->request->getPost('discount');
            $this->quantity = $this->request->getPost('quantity');
            $this->description = $this->request->getPost('description');
            $this->status = $this->request->getPost('status');

            $this->addProduct();

            $this->redirect('products', 'grid');
        }
        echo "Invalid Request";
    }

    public function updateForm()
    {
        $this->productId = $_GET['id'];
        $data = $this->getProductById();
        require_once "./View/products/updateform.php";
    }

    public function update()
    {

        if ($this->request->isPost()) {

            $this->productId = $this->request->getGet('id');
            $this->name = $this->request->getPost('name');
            $this->price = $this->request->getPost('price');
            $this->discount = $this->request->getPost('discount');
            $this->quantity = $this->request->getPost('quantity');
            $this->description = $this->request->getPost('description');
            $this->status = $this->request->getPost('status');;

            $this->updateProduct();

            $this->redirect('products', 'grid', null, true);
        }
        echo "Invalid Request";
    }

    public function delete()
    {
        $_POST = json_decode(file_get_contents("php://input"), true);
        $this->productId = $_POST['id'];
        return $this->deleteProduct();
    }
}
