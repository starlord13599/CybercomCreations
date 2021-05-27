<?php
class Product
{
    protected $price = 0.00;
    protected $quantity = null;
    protected $name = null;
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
$product = new Product();
echo "<pre>";
$product->setPrice(100.00);
$product->setQuantity(10.00);
$product->setName('Nokia 1100');


$product->setPrice(100.00)->setQuantity(20.0);





print_r($product);

// class Transfer {
// 	protected $product = null;
// 	public function setProduct($product) {
// 		$this->product = $product;
// 		return $this;
// 	}
// 	public function getProduct() {
// 		return $this->product;
// 	}
// 	public function sendMoney() {
// 		$product = $this->getProduct();
//         $product->getPrice();
// 		//send into mail : $finalAmount
// 	}
// }

// $transfer1 = new Transfer();
// $transfer1->setProduct($product);

// $product->setPrice(200.00);
// $transfer2 = new Transfer();
// $transfer2->setProduct($product);

// $transfer1->sendMoney(); //
// $transfer2->sendMoney(); //
