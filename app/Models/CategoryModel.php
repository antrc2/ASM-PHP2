<?php
    namespace App\Models;
    use App\Models\Model;
    use App\Models\CRUDModel;
    class CategoryModel extends Model implements CRUDModel{
        
        protected $table = "category";
        private $connection;

        public function __construct(){
            $this->connection = new Model();
        }
        public function getAll(){
            $sql = "SELECT * FROM {$this->table}";
            $this->connection->setSQL($sql);
            return $this->connection->all();
        }
        public function getOne($options){
            $sql = "SELECT * FROM {$this->table} WHERE category_id = ?";
            $this->connection->setSQL($sql);
            return $this->connection->first($options);
        }
        public function post($options){
            $sql = "INSERT INTO category(category_name) VALUES(?)";
            $this->connection->setSQL($sql);
            return $this->connection->execute($options);
        }
        public function put($options){
            $sql = "UPDATE category SET category_name = ? WHERE category_id =?";
            $this->connection->setSQL($sql);
            return $this->connection->execute($options);
        }
        public function delete($options){
            $sql = "UPDATE category SET category_status =2 WHERE category_id=?";
            $this->connection->setSQL($sql);
            return $this->connection->execute($options);
        }
        public function undo($options){
            $sql = "UPDATE category SET category_status =1 WHERE category_id=?";
            $this->connection->setSQL($sql);
            return $this->connection->execute($options);
        }
        
            
        
    }

?>