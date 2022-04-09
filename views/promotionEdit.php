<?php  require_once './headerUser.php' ?>
<link rel="stylesheet" href="../public/css/edit_account.css">

<!-- Edit Section Begin -->
<section class="edit">
    <div class="container">
        <div class="edit__form">
            <h4>Cập nhật chương trình giảm giá:</h4>
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Tiêu đề:<span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="text" name="txt_title" value="Tiêu đề của chương trình giảm giá">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Nội dung: <span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <textarea name="txt_content" cols="64" rows="5">Từ ngày 29/4/2022 đến ngày 1/5/2022 tại Coffee, Quý Khách Hàng khi mua hàng sẽ được giảm 10% cho đơn hàng từ 150k.
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Giảm giá (%): <span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="number" name="txt_sale" value="10">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Đơn từ (đ): <span>*</span></p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="number" name="txt_proviso" value="150000">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Ngày bắt đầu: </p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="date" name="dateStart" value="2022-04-29">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="edit__input">
                                    <p>Ngày kết thúc: </p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="edit__input">
                                    <input type="date" name="dateEnd" value="2022-05-01" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="col-lg-8">
                            <div class="edit_avatar">
                                <img src="../public/img/categories/cat-1.jpg" alt="">
                                <label for="file_img">Chọn ảnh mới</label>
                                <input type="file" name="txt_avatar" id="flie_img">
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