<?php

class ProductDvdDisc extends MainProduct
{
    public function __construct(public $sku, public $name, public $price, public $size)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
    }

    // Now using parent class method validateProduct()

    public function validateProduct()
    {
        if (!empty($this->sku) && !empty($this->name) && !empty($this->price) && !empty($this->size)) {
            $sql = 'INSERT INTO products (sku, name, price, size) VALUES (:sku, :name, :price, :size)';
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindValue('sku', $this->sku);
            $stmt->bindValue('name', $this->name);
            $stmt->bindValue('price', $this->price);
            $stmt->bindValue('size', $this->size);
            $stmt->execute();
        }
    }
}
