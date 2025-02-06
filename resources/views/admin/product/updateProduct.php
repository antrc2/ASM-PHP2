<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="resources/js/admin/product/updateProduct.js"></script>
</head>

<body>
    <main>
        <?php require_once __DIR__ . "/../component/navbar.php" ?>
        <div>
        <form action="" method="POST" enctype="multipart/form-data" onsubmit="return updateProduct()">
    <div>
        <label for="product_name">Tên</label>
        <input type="text" name="product_name" id="product_name" value="<?= $product->product_name ?>">
        <div id="product_name_error" class="error"></div>
    </div>
    <div>
        <label for="product_price">Giá</label>
        <input type="number" name="product_price" id="product_price" value="<?= $product->product_price ?>">
        <div id="product_price_error" class="error"></div>
    </div>
    <div>
        <label for="product_image">Ảnh</label>
        <input type="file" name="product_image" id="product_image">
        <img src="<?= "resources/img/".$product->product_image ?>" width="100px" alt="">
        <div id="product_image_error" class="error"></div>
    </div>
    <div>
        <label for="product_amount">Số lượng</label>
        <input type="number" name="product_amount" id="product_amount" value="<?= $product->product_amount ?>">
        <div id="product_amount_error" class="error"></div>
    </div>
    <div>
        <label for="product_detail">Mô tả</label>
        <input type="text" name="product_detail" id="product_detail" value="<?= $product->product_detail ?>">
        <div id="product_detail_error" class="error"></div>
    </div>
    <div>
        <label for="product_cate_id">Danh mục</label>
        <select name="product_cate_id" id="product_cate_id">
            <option value="<?= $product->product_cate_id ?>"><?= $product->category_name ?></option>
            <?php foreach ($categories as $category): ?>
                <?php if ($product->product_cate_id !== $category->category_id): ?>
                    <option value="<?= $category->category_id ?>"><?= $category->category_name ?></option>
                <?php endif ?>
            <?php endforeach ?>
        </select>
        <div id="product_cate_id_error" class="error"></div>
    </div>
    <div>
        <button type="submit" name="btn_updateProduct">Sửa</button>
    </div>
</form>
        </div>
        <?php require_once __DIR__ . "/../component/footer.php" ?>
    </main>
</body>

</html>