<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <?php require_once __DIR__ . "/../component/navbar.php" ?>
        <div>
            <h1>Danh sách đơn hàng</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Xem chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?= $order->order_id ?></td>
                            <td><?= $order->product_name ?></td>
                            <td><?= number_format($order->order_price) ?></td>
                            <td><?= $order->order_amount ?></td>
                            <td><a href="?act=detail-order&id=<?= $order->order_id ?>"><button>Xem chi tiết</button></a></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
        <?php require_once __DIR__ . "/../component/footer.php" ?>
    </main>
</body>

</html>