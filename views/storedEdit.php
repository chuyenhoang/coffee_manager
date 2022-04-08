<?php  require_once './headerAdmin.php' ?>

<link rel="stylesheet" href="../public/css/edit_account.css">
<!-- Edit Section Begin -->
<section class="edit">
    <div class="container">
        <div class="edit__form">
            <h4>Cập nhập thông tin nguyên vật liệu</h4>
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-8 col-md-6">  
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Tên nguyên vật liệu:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="text" name="txt_name" value="coffee">
                                </div>
                            </div>
                        </div>             
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Số lượng:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="number" name="txt_amount" value="4">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Giá bán (vnđ):<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="number" name="txt_price" value="30.000">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Đơn vị tính:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="text" name="txt_address" value="Kg">
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
                    <div class="col-lg-4">
                        <!-- <div class="row"> -->
                            <div class="col-lg-8">
                                <div class="edit_avatar">
                                    <img src="../public/img/categories/cat-1.jpg" alt="ảnh">
                                    <label for="img_avatar">Chọn ảnh</label>
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
