<?php
    namespace App\Controllers;
    use App\Models\ProductModel;
    use App\Models\CategoryModel;
    class ProductController extends ProductModel{
        
        private $product;
        private $category;
        function __construct()
        {
            $this->product = new ProductModel();
            $this->category = new CategoryModel();
        }
        function listProduct(){
            $products = $this->product->getAll();
            require_once __DIR__ . "/../../resources/views/admin/product/listProduct.php";
        }
        function addProduct(){
            if (isset($_POST['btn_addProduct'])) {
                $options = [];
                foreach ($_POST as  $key=>$value) {
                    if ($key !== "btn_addProduct"){
                        $options[] = $value;
                    }
                }
                move_uploaded_file($_FILES['product_image']['tmp_name'], __DIR__ . "/../../resources/img/"   . $_FILES['product_image']['name']);
                $options[] = $_FILES['product_image']['name'];
                if ($this->product->post($options)){
                    header("Location: ?act=list-product");
                } else {
                    echo "Đã có lỗi xảy ra";
                }
            } else {
                $categories = $this->category->getAll();

                require_once __DIR__ . "/../../resources/views/admin/product/addProduct.php";
            }
        }
        function updateProduct($id){
            $product = $this->product->getOne([$id]);
            if(isset($_POST['btn_updateProduct'])){
                $options = [];
                foreach ($_POST as  $key=>$value) {
                    if ($key !== "btn_updateProduct"){
                        $options[] = $value;
                    }
                }
                if (empty($_FILES['product_image']['name'])){
                    $options[] = $product->product_image;
                } else {
                    move_uploaded_file($_FILES['product_image']['tmp_name'], __DIR__ . "/../../resources/img/"   . $_FILES['product_image']['name']);
                    $options[] = $_FILES['product_image']['name'];
                }
                
                $options[] = $id;
                if ($this->product->put($options)){
                    header("Location: ?act=list-product");
                } else {
                    echo "Đã có lỗi xảy ra";
                }
            } else {
                $categories = $this->category->getAll();
                
                require_once __DIR__ . "/../../resources/views/admin/product/updateProduct.php";
            }
            
        }
        function deleteProduct($id){
            if ($this->product->delete([$id])){
                header("Location: ?act=list-product");
            } else{
                echo "Lỗi";
            }
        }
        function undoProduct($id){
            if ($this->product->undo([$id])){
                header("Location: ?act=list-product");
            } else{
                echo "Lỗi";
            }
        }
    }
?>