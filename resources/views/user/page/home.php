<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "resources/views/user/component/head.php" ?>
    <title>Trang web bán điện thoại và laptop</title>
    <link rel="stylesheet" href="resources/css/user/home.css">
</head>

<body>
    <?php require_once "resources/views/user/component/header.php" ?>
    <main>
        <section class="product-list">
            <h2>Sản phẩm nổi bật</h2>
            <div class="products">
                <?php  $count =0?>
                <?php foreach ($products as $product): ?>
                    <?php if ($product->product_status == 1): ?>
                    <?php $count++ ?>
                    <div class="product">
                        <img src="resources/img/<?= $product->product_image ?>" alt="iPhone 14 Pro">
                        <h3><?= $product->product_name ?></h3>
                        <p class="price"><?= number_format($product->product_price) ?>đ</p>
                        <button class="add-to-cart">Thêm vào giỏ hàng</button>
                
                    </div>
                <?php endif ?>
                <?php endforeach ?>
                <?php if ($count ==0): ?>
                    <h3>Không tìm thấy sản phẩm</h3>
                <?php endif ?>
            
            </div>
        </section>
    </main>
    <?php require_once "resources/views/user/component/footer.php" ?>
</body>

</html>