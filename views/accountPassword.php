<?php 
    require_once './headerUser.php';
    // require_once './headerAdmin.php';
?>
<link rel="stylesheet" href="../public/css/register.css">

<!-- Register Section Begin -->
<section class="register">
    <div class="container">
        <h2>Đổi Mật Khẩu</h2>
        <p>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</p>
        <div class="register__form">
            <form method="POST">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Mật khẩu hiện tại:</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="password" name="txt_current_pass">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Mật khẩu mới:</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="text" name="txt_new_pass">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="register__input">
                                    <p>Xác nhận mật khẩu:</p>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="register__input">
                                    <input type="text" name="txt_confirm _pass">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <button type="submit" class="site-btn" name="btn_edit_pass">Đổi mật khẩu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<?php require_once './footer.php' ?>
