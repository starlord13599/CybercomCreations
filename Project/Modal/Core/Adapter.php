<?php
// echo "<pre>";
class Adapter
{
    private $hostname = 'localhost';
    private $user = 'pmauser';
    private $password = '9993';
    private $database = 'crm';
    protected $connect = null;

    public function setConnect()
    {
        $this->connect = $this->connection();
    }

    public function getConnect()
    {
        return $this->connect;
    }

    private function connection()
    {
        $connect = new mysqli($this->hostname, $this->user, $this->password, $this->database);
        return $connect;
    }

    public function isConnected()
    {
        if (!$this->connect) {
            return false;
        }
        return true;
    }

    public function insert($query)
    {
        if (!$this->connect) {
            $this->setConnect();
        }

        if ($this->getConnect()->query($query)) {
            return $this->getConnect()->insert_id;
        };
        return false;
    }

    public function update($query)
    {
        if (!$this->connect) {
            $this->setConnect();
        }

        if ($this->getConnect()->query($query)) {
            return true;
        }
        return false;
    }

    public function delete($query)
    {
        if (!$this->connect) {
            $this->setConnect();
        }

        if ($this->getConnect()->query($query)) {

            return true;
        }
        return false;
    }

    public function fetchRow($query)
    {
        if (!$this->connect) {
            $this->setConnect();
        }

        if ($this->getConnect()->query($query)) {
            $result = $this->getConnect()->query($query)->fetch_assoc();
            return $result;
        }
        return false;
    }

    public function fetchAll($query)
    {
        if (!$this->connect) {
            $this->setConnect();
        }

        if ($this->getConnect()->query($query)->num_rows > 0) {
            $result = $this->getConnect()->query($query)->fetch_all(MYSQLI_ASSOC);
            return $result;
        }
        return false;
    }
}

// $sql = new Sql;
// $sql->setConnect();

// print_r($sql->getConnect());


// $name = 'Nokia 2';
// $price = 12000;
// $discount = 20;
// $quantity = 2;
// $description = 'Very Good phone';
// $status = 'Enabeled';

// $stmt = "INSERT INTO `products`(name,price,discount,quantity,description,status)
//  VALUES ('$name','$price','$discount','$quantity','$description','$status')";
// $stmt = "UPDATE `products` SET name='Redmi 8A' WHERE productId=1";
// $stmt = "DELETE FROM `products` WHERE productId=1";
// $stmt = "SELECT * FROM `products` WHERE productId=15";



// $stmt = "SELECT * FROM `products`";

// print_r($sql->fetchAll($stmt));




// $sql->delete($stmt);
// $sql->update($stmt);
// print_r($sql->insert($stmt));
// print_r($sql->getConnect());
