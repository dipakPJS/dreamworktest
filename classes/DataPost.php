<?php

class DataPost
{
    use DataConn;

    // method for fetching the data from the database

    public function showPost()
    {
        $sql = 'SELECT * FROM products';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }

    // method for deleting the data from the database with the help of checkbox

    public function deletePost($id)
    {
        $sql = "DELETE FROM products WHERE id = $id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
    }

    // method for checking whether the data with SKU ID already exists or not

    public function skuCheck($sku)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM products WHERE sku = ?');
        $stmt->execute([$sku]);

        return $stmt->rowCount() > 0;
    }
}
