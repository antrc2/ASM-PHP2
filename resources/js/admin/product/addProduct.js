function addProduct() {
    // Lấy các phần tử input và select
    document.querySelectorAll(".error").forEach(e => {
        e.textContent = "";
        e.style.color = "red";
        e.style.fontSize = "15px";
    });
    

    const productName = document.getElementById('product_name');
    const productPrice = document.getElementById('product_price');
    const productImage = document.getElementById('product_image');
    const productAmount = document.getElementById('product_amount');
    const productDetail = document.getElementById('product_detail');
    const productCateId = document.getElementById('product_cate_id');

    // Lấy các phần tử hiển thị lỗi
    const productNameError = document.getElementById('product_name_error');
    const productPriceError = document.getElementById('product_price_error');
    const productImageError = document.getElementById('product_image_error');
    const productAmountError = document.getElementById('product_amount_error');
    const productDetailError = document.getElementById('product_detail_error');
    const productCateIdError = document.getElementById('product_cate_id_error');

    // Reset các thông báo lỗi trước khi validate
    productNameError.textContent = '';
    productPriceError.textContent = '';
    productImageError.textContent = '';
    productAmountError.textContent = '';
    productDetailError.textContent = '';
    productCateIdError.textContent = '';

    let isValid = true;

    // Kiểm tra tên sản phẩm
    if (!productName.value.trim()) {
        productNameError.textContent = 'Tên sản phẩm không được để trống.';
        isValid = false;
    }

    // Kiểm tra giá sản phẩm
    if (!productPrice.value.trim() || productPrice.value <= 0) {
        productPriceError.textContent = 'Giá sản phẩm phải lớn hơn 0.';
        isValid = false;
    }

    // Kiểm tra ảnh sản phẩm
    if (!productImage.files.length) {
        productImageError.textContent = 'Vui lòng chọn một ảnh cho sản phẩm.';
        isValid = false;
    } else {
        const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if (!allowedExtensions.exec(productImage.value)) {
            productImageError.textContent = 'Chỉ chấp nhận các định dạng ảnh: JPG, JPEG, PNG, GIF.';
            isValid = false;
        }
    }

    // Kiểm tra số lượng sản phẩm
    if (!productAmount.value.trim() || productAmount.value <= 0) {
        productAmountError.textContent = 'Số lượng sản phẩm phải lớn hơn 0.';
        isValid = false;
    }

    // Kiểm tra mô tả sản phẩm
    if (!productDetail.value.trim()) {
        productDetailError.textContent = 'Mô tả sản phẩm không được để trống.';
        isValid = false;
    }

    // Kiểm tra danh mục sản phẩm
    if (!productCateId.value) {
        productCateIdError.textContent = 'Vui lòng chọn một danh mục.';
        isValid = false;
    }

    return isValid; // Trả về true nếu tất cả đều hợp lệ, ngược lại trả về false
}