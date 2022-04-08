<?php  require_once './headerUser.php' ?>
<link rel="stylesheet" href="../public/css/edit_account.css">
<!-- Edit Section Begin -->
<section class="edit">
    <div class="container">
        <div class="edit__form">
            <h4>Cập nhật chức vụ:</h4>
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="edit__input">
                            <p>Tên chức vụ:<span>*</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="edit__input">
                            <input type="text" name="txt_name" value="Khách hàng">
                        </div>
                    </div>
                </div>
                <button type="submit" class="site-btn" name="btn_edit_account">Cập nhật</button>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<?php require_once './footer.php' ?>
