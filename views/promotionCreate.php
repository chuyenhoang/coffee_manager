<?php  require_once './headerUser.php' ?>
<link rel="stylesheet" href="./public/css/register.css">
<!-- Register Section Begin -->
<section class="register">
    <div class="container">
        <div class="register__form">
            <h4>Thêm chương trình giảm giá mới:</h4>
            <form method="POST">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Tiêu đề: <span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="text" name="txt_title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Nội dung: <span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <textarea name="txt_content" cols="64" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Hình ảnh: <span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="file" name="file_image" id="flie_img" style="display: none;">
                                    <label for="flie_img" style="margin-left: 8px; cursor: pointer;">
                                        <i class="fa fa-solid fa-image"></i> Chọn ảnh
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Giảm giá (%): <span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="number" name="txt_sale">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Đơn hàng từ (đ): <span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="number" name="txt_proviso">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Ngày bắt đầu: </p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="date" name="dateStart">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Ngày kết thúc: </p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="date" name="dateEnd">
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
