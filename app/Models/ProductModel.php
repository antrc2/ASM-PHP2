<?php
    namespace App\Models;
    use App\Models\Model;
    use App\Models\CRUDModel;
    class ProductModel extends Model implements CRUDModel{
        
        protected $table = "product";
        private $connection;

        public function __construct()
        {
            $this->connection = new Model();
        }

        public function getAll(){
            $sql = "SELECT * FROM {$this->table} JOIN category ON category.category_id = product.product_cate_id";
            $this->connection->setSQL($sql);
            return $this->connection->all();
        }

        public function getOne($options){
            $sql = "SELECT * FROM {$this->table} JOIN category ON category.category_id = product.product_cate_id WHERE product_id=?";
            $this->connection->setSQL($sql);
            return $this->connection->first($options);
        }
        public function post($options){
            $sql = "INSERT INTO {$this->table}(product_name,product_price,product_amount,product_detail,product_cate_id,product_image) VALUES (?,?,?,?,?,?)";
            $this->connection->setSQL($sql);
            return $this->connection->execute($options);
        }
        public function put($options){
            $sql = "UPDATE {$this->table} SET product_name = ?,product_price=?,product_amount=?,product_detail=?,product_cate_id=?,product_image=? WHERE product_id=?";
            $this->connection->setSQL($sql);
            return $this->connection->execute($options);
        }
        public function delete($options){
            $sql = "UPDATE {$this->table} SET product_status=2 WHERE product_id=?";
            $this->connection->setSQL($sql);
            return $this->connection->execute($options);
        }
        public function undo($options){
            $sql = "UPDATE product SET product_status=1 WHERE product_id=?";
            $this->connection->setSQL($sql);
            return $this->connection->execute($options);
        }
        public function getAllProductByCategoryId($options){
            $sql = "SELECT * FROM {$this->table} WHERE product_cate_id = ? ORDER BY product_id";
            $this->connection->setSQL($sql);
            return $this->connection->executeQuery($options);
        }
    }
?>