<?php 
    require_once './headerUser.php';
    // require_once './headerAdmin.php';
?>

<link rel="stylesheet" href="../public/css/edit_account.css">

<!-- Edit Section Begin -->
<section class="edit">
    <div class="container">
        <div class="edit__form">
            <h4>Cập nhật thông tin tài khoản</h4>
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Họ tên:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="text" name="txt_name" value="Nguyễn Ngọc Huyền">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Giới tính:</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="radio" name="gender" value="1" checked> Nữ
                            </div>
                            <div class="col-lg-2">
                                <input type="radio" name="gender" value="0"> Nam
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Số điện thoại:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="tel" name="txt_phone" value="08...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Địa chỉ:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="text" name="txt_address" value="BN">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Vai trò: <span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option value="1" selected>Khách hàng</option>
                                    <option value="2">Nhân viên bán hàng</option>
                                    <option value="3">Nhân viên kho</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- <div class="row"> -->
                            <div class="col-lg-8">
                                <div class="edit_avatar">
                                    <img src="../public//img/categories/cat-1.jpg" alt="avatar">
                                    <label for="img_avatar">Chọn ảnh mới</label>
                                    <input type="file" name="txt_avatar" id="img_avatar">
                                </div>
                            </div>
                    </div>
                </div>
                <button type="submit" class="site-btn" name="btn_edit">Cập nhật</button>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<?php require_once './footer.php' ?>
