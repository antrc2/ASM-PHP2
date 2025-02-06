<?php
    namespace App\Models;
    use App\Models\Model;
    use App\Models\CRUDModel;

    class OrderModel extends Model implements CRUDModel{
        private $order;
        private $table = 'order_table';
        public function __construct()
        {
            $this->order = new Model();
        }

        public function getAll(){
            $sql = "SELECT * FROM {$this->table} JOIN product ON order_product_id = product_id";
            $this->order->setSQL($sql);
            return $this->order->all();
        }
        public function getOne($options){
            $sql = "SELECT * FROM {$this->table} JOIN product ON order_product_id = product_id WHERE order_id = ?";
            $this->order->setSQL($sql);
            return $this->order->first($options);
        }
        public function post($options){

        }
        public function put($options){

        }
        public function delete($options)
        {
            
        }
        public function undo($options)
        {
            
        }
    }
?>