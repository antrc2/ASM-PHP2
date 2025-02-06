<?php
    use App\Models\CategoryModel;
    $categoryModel = new CategoryModel;
    $categories =  $categoryModel->getAll();
?>
<header>
    <nav class="navbar">
        <div class="navbar-left">
            <a href="/" class="logo">TechShop</a>
            <ul class="nav-links">
                <li><a href="?act=/"><button>Trang chủ</button></a></li>
                <?php foreach ($categories as $category): ?>
                    <?php if ($category->category_status ==1): ?>
                <li><a href="?act=category&id=<?= $category->category_id ?>"><button><?=$category->category_name?></button></a></li>
                        <?php endif ?>
                <?php endforeach ?>
                <li><a href="?act=contact"><button>Liên hệ</button></a></li>
                <!-- <li><a href="/laptop">Laptop</a></li> -->
            </ul>
        </div>
        <div class="navbar-right">
            <div class="account-menu">
                <button class="account-btn">Tài khoản</button>
                <ul class="sub-menu">
                    <li><a href="?act=login"><button>Đăng nhập</button></a></li>
                    <li><a href="?act=register"><button>Đăng ký</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>