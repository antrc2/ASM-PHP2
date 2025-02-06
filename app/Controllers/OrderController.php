<?php
    namespace App\Controllers;
    use App\Models\OrderModel;

    class OrderController extends OrderModel{
        private $order;
        public function __construct()
        {
            $this->order = new OrderModel();
        }
        public function listOrder(){
            $orders = $this->order->getAll();
            require_once __DIR__ . "/../../resources/views/admin/order/listOrder.php";
        }
        public function detailOrder($id){
            $order = $this->order->getOne([$id]);
            require_once __DIR__ . "/../../resources/views/admin/order/detailOrder.php";
        }
    }
?>