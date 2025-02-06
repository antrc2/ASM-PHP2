<?php
    namespace App\Controllers;
    use App\Models\PageModel;
    use App\Models\ProductModel;
    class PageController extends PageModel{
        private $table;
        private $product;
        public function __construct()
        {
            $this->product = new ProductModel();
        }

        public function home(){
            $products = $this->product->getAll();
            require_once __DIR__ . "/../../resources/views/user/page/home.php";
        }
        public function category($id){
            $products = $this->product->getAllProductByCategoryId([$id]);
            require_once __DIR__ . "/../../resources/views/user/page/home.php";
        }
        public function contact(){
            require_once __DIR__ . "/../../resources/views/user/page/contact.php";
        }
        public function dashboard(){
            require_once __DIR__ . "/../../resources/views/admin/page/dashboard.php";
        }
    }
?>