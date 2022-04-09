<?php require_once './headerUser.php'?>
<link rel="stylesheet" href="../public/css/register.css">

<!-- Register Section Begin -->
<section class="register">
    <div class="container">
        <div class="register__form">
            <h4>Tạo tài khoản</h4>
            <form method="POST">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Họ tên:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="text" name="txt_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
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
                                <div class="register__input">
                                    <p>Số điện thoại:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="tel" name="txt_phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Địa chỉ:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="text" name="txt_address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Mật khẩu:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="password" name="txt_password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Vai trò: <span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Chọn</option>
                                    <option value="1">Khách hàng</option>
                                    <option value="2">Nhân viên bán hàng</option>
                                    <option value="3">Nhân viên kho</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <button type="submit" class="site-btn" name="btn_register">Đăng ký</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<?php require_once './footer.php' ?>