<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* margin: 20px; */
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .product-image {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .order-info {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <main>
        <?php require_once __DIR__. "/../component/navbar.php"; ?>
        <div class="container">
            <h2>Chi tiết đơn hàng</h2>
            <div class="order-info">
                <p><strong>Mã đơn hàng:</strong> <?php echo $order->order_id; ?></p>
                <p><strong>Người dùng:</strong> <?php echo $order->order_user_id; ?></p>
                <p><strong>Tên sản phẩm:</strong> <?php echo $order->product_name; ?></p>
                <img src="resources/img/<?php echo $order->product_image; ?>" alt="<?php echo $order->product_name; ?>" class="product-image">
                <p><strong>Giá:</strong> <?php echo number_format($order->order_price, 0, ',', '.'); ?> VNĐ</p>
                <p><strong>Số lượng:</strong> <?php echo $order->order_amount; ?></p>
                <p><strong>Mô tả:</strong> <?php echo $order->product_detail; ?></p>
            </div>
        </div>
        <?php require_once __DIR__ . "/../component/footer.php"; ?>
    </main>
</body>
</html>