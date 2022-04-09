<?php  require_once './headerAdmin.php' ?>
<link rel="stylesheet" href="../public/css/register.css">

<!-- Register Section Begin -->
<section class="register">
    <div class="container">
        <div class="register__form">
            <h4>Thêm nguyên liệu </h4>
            <form method="POST">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Tên nguyên liệu:<span>*</span></p>
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
                                    <p>Số lượng:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="number" name="txt_amount">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Giá bán:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="number" name="txt_price">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Đơn vị tính:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="text" name="txt_unit">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Nhà cung cấp:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="col-lg-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>Chọn</option>
                                        <option value="1">Nhà cung cấp A</option>
                                        <option value="2">Nhà cung cấp B</option>
                                        <option value="3">Nhà cung cấp C</option>
                                        <option value="4">Nhà cung cấp D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <button type="submit" class="site-btn" name="btn_create">Thêm mới</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
<?php require_once './footer.php' ?>
