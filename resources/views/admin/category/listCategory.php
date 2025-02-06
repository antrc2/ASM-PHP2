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
        <h1>Danh sách danh mục</h1>
        <a href="?act=add-category"><button>Thêm danh mục</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Trạng thái</th>
                    <th>Sửa</th>
                    <th>Xóa / Bỏ xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?= $category->category_id?></td>
                        <td><?= $category->category_name?></td>
                        <td><?= $category->category_status ==1 ? "Chưa xóa" : "Đã xóa"  ?></td>
                        <td><a href="?act=update-category&id=<?=$category->category_id?>"><button>Sửa</button></a></td>
                        <td>
                            <?php if ($category->category_status ==1) :?>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="?act=delete-category&id=<?=$category->category_id?>"><button>Xóa</button></a>
                            <?php else:?>
                                <a href="?act=undo-category&id=<?=$category->category_id?>"><button>Bỏ xóa</button></a>
                            <?php endif ?>        
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