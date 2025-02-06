<?php 
// include 'app/Models/Product.php';
// $conection = new Product();
// $conection->getConnection();
// include 'app/Models/Model.php';

include 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/');
$dotenv->load();

use App\Controllers\CategoryController;
use App\Controllers\ProductController;
use App\Controllers\PageController;
use App\Controllers\OrderController;

$category = new CategoryController();
$product = new ProductController();
$page = new PageController();
$order = new OrderController();

$act = $_GET['act'] ?? "/";

if($act == "list-category"){
    $category->listCategory();
} elseif ($act == "list-product"){
    $product->listProduct();
} elseif ($act == 'add-product'){
    $product->addProduct();
} elseif ($act == "update-product"){
    $product->updateProduct($_GET['id']);
} elseif ($act == "delete-product"){
    $product->deleteProduct($_GET['id']);
} elseif ($act == "undo-product"){
    $product->undoProduct($_GET['id']);
} elseif ($act == "add-category"){
    $category->addCategory();
} elseif ($act == "update-category"){
    $category->updateCategory($_GET['id']);
} elseif ($act == "delete-category"){
    $category->deleteCategory($_GET['id']);
} elseif ($act == "undo-category"){
    $category->undoCategory($_GET['id']);
} elseif ($act == "/"){
    $page->home();
}  elseif ($act == "category"){
    $page->category($_GET['id']);
} elseif ($act == "contact"){
    $page->contact();
} elseif ($act == "list-order"){
    $order->listOrder();
} elseif ($act == "detail-order"){
    $order->detailOrder($_GET['id']);
} elseif ($act == 'dashboard'){
    $page->dashboard();
}


// include 'app/Models/Product.php';
// use App\Models\Product;
// $pro = new Product();

// var_dump($pro->getAllProducts());
// var_dump($pro->getIdProduct(1));
// $pro->addProduct(null, 'Test1', 1000, 'Test 1 add');
// var_dump($pro->getAllProducts());
// $pro->updateProduct(1, 'Test123', 1000, 'Test 123 update');
// var_dump($pro->getAllProducts());
// $pro->deleteProduct(1);
// var_dump($pro->getAllProducts());
// $conection = new Model();
// $sql = "SELECT * FROM products ";
// $conection->setSQL($sql);
// var_dump($conection->all());
// $sql = "SELECT * FROM products WHERE id = ?";
// $conection->setSQL($sql);
// var_dump($conection->first([1]));
// $sql = "INSERT INTO products VALUES (?,?,?,?)";
// $conection->setSQL($sql);
// $data = [null, "Test1", 1000, "Test Model"]; 
// $conection->execute($data);
// var_dump($conection);
// $conection -> getConnection();
?>