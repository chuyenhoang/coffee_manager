<?php  require_once './headerUser.php' ?>
<link rel="stylesheet" href="./public/css/style.css" type="text/css">
<!-- Edit Section Begin -->
<section class="edit">
    <div class="container">
        <div class="edit__form">
            <h4>Tạo chức vụ mới:</h4>
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="edit__input">
                            <p>Tên chức vụ:<span>*</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="edit__input">
                            <input type="text" name="txt_name">
                        </div>
                    </div>
                </div>
                <button type="submit" class="site-btn" name="btn_create">Thêm mới</button>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
<?php require_once './footer.php' ?>
