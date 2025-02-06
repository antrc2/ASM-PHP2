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
    <h1>Sửa danh mục</h1>
    <form action="" method="POST">
        <div>
            <label for="">Tên danh mục</label>
            <input type="text" name="category_name" value="<?= $category->category_name?>">
        </div>
        <div>
            <button name="btn_updateCategory">Sửa</button>
        </div>
    </form>
    <?php require_once __DIR__."/../component/footer.php" ?>
    </main>
</body>
</html>