<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <?php require_once __DIR__. "/../component/navbar.php" ?>
    <div>
        <h1>Danh sách sản phẩm</h1>
        <a href="?act=add-product"><button>Thêm sản phẩm</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Ảnh</th>
                    <th>Số lượng</th>
                    <th>Mô tả</th>
                    <th>Danh mục</th>
                    <th>Trạng thái</th>
                    <th>Sửa</th>
                    <th>Xóa / Bỏ xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product->product_id?></td>
                        <td><?=$product->product_name?></td>
                        <td><?=number_format($product->product_price)?></td>
                        <td><img src="<?= "resources/img/".$product->product_image?>" width="100px" alt=""></td>
                        <td><?=$product->product_amount?></td>
                        <td><?=$product->product_detail?></td>
                        <td><?= $product->category_name ?></td>
                        <td><?= $product->product_status ==1 ? "Chưa xóa" : "Đã xóa"  ?></td>
                        <td><a href="?act=update-product&id=<?=$product->product_id?>"><button>Sửa</button></a></td>
                        <td>
                            <?php if($product->product_status == 1): ?>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="?act=delete-product&id=<?=$product->product_id?>"><button>Xóa</button></a>
                            <?php else: ?>
                                <a href="?act=undo-product&id=<?=$product->product_id?>"><button>Bỏ xóa</button></a>
                            <?php endif?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <?php require_once __DIR__."/../component/footer.php" ?>
    </main>
</body>
</html>