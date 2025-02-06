<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="resources/js/admin/product/addProduct.js"></script>
</head>
<body>
    <main>
    <?php require_once __DIR__. "/../component/navbar.php" ?>
    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return addProduct()">
    <div>
        <label for="product_name">Tên</label>
        <input type="text" name="product_name" id="product_name">
        <div id="product_name_error" class="error"></div>
    </div>
    <div>
        <label for="product_price">Giá</label>
        <input type="number" name="product_price" id="product_price">
        <div id="product_price_error" class="error"></div>
    </div>
    <div>
        <label for="product_image">Ảnh</label>
        <input type="file" name="product_image" id="product_image">
        <div id="product_image_error" class="error"></div>
    </div>
    <div>
        <label for="product_amount">Số lượng</label>
        <input type="number" name="product_amount" id="product_amount">
        <div id="product_amount_error" class="error"></div>
    </div>
    <div>
        <label for="product_detail">Mô tả</label>
        <input type="text" name="product_detail" id="product_detail">
        <div id="product_detail_error" class="error"></div>
    </div>
    <div>
        <label for="product_cate_id">Danh mục</label>
        <select name="product_cate_id" id="product_cate_id">
            <option value="">Chọn danh mục</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?=$category->category_id?>"><?=$category->category_name?></option>
            <?php endforeach ?>
        </select>
        <div id="product_cate_id_error" class="error"></div>
    </div>
    <div>
        <button type="submit" name="btn_addProduct" id="btn_addProduct">Thêm</button>
    </div>
</form>

    <?php require_once __DIR__."/../component/footer.php" ?>
    </main>
</body>
</html>