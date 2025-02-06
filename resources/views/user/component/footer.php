<footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Về chúng tôi</h4>
                <p>TechShop là cửa hàng chuyên cung cấp các sản phẩm điện thoại và laptop chính hãng với giá cả hợp lý.</p>
            </div>
            <div class="footer-section">
                <h4>Liên hệ</h4>
                <p>Email: antrc2gamer@gmail.com</p>
                <p>Phone: +84 838 411 897</p>
            </div>
            <div class="footer-section">
                <h4>Liên kết nhanh</h4>
                <ul>
                    <li><a href="?act=/">Trang chủ</a></li>
                    <?php foreach ($categories as $category): ?>
                        <?php if ($category->category_status ==1): ?>
                            <li><a href="?act=category&id=<?= $category->category_id ?>"><?=$category->category_name?></a></li>
                        <?php endif ?>
                    <?php endforeach ?>
                    <li><a href="?act=login">Đăng nhập</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 TechShop. All rights reserved.</p>
        </div>
    </footer>