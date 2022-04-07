<?php require_once './headerAdmin.php' ?>

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row" style="margin: 40px 0px 40px 0px">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Chọn loại tài khoản</span>
                    </div>
                    <ul>
                        <li><a href="./account_list.html">Tất cả</a></li>
                        <li><a href="./account_list.html?roleId=1">Khách hàng</a></li>
                        <li><a href="./account_list.html?roleId=2">Nhân viên</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#" method="post">
                            <input type="text" placeholder="Nhập nội dung tìm kiếm?" name="txt-search">
                            <button type="submit" class="site-btn">TÌM KIẾM</button>
                        </form>
                    </div>
                    <div>
                        <a href="./register.html" class="site-btn" name="btn-create" style="margin-left: 30px; ;height: 50px;">Thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <h2 style="text-align: center;">Danh sách tài khoản</h2>
    </div>
</section>
<!-- Hero Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad" style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Họ tên</th>
                            <th>Giới tính</th>
                            <th>Điện thoại</th>
                            <th>Địa chỉ</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Huyền</td>
                            <td>Nữ</td>
                            <td>09...</td>
                            <td>Hạp Lĩnh- Bắc Ninh</td>
                            <td>
                                <a href="./accountEdit.html">Sửa</a>
                            </td>
                            <td>
                                <a href="./accounts.html?userId=1" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Huyền</td>
                            <td>Nữ</td>
                            <td>09...</td>
                            <td>Hạp Lĩnh- Bắc Ninh</td>
                            <td>
                                <a href="./accountEdit.html">Sửa</a>
                            </td>
                            <td>
                                <a href="./accounts.html?userId=2" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Huyền</td>
                            <td>Nữ</td>
                            <td>09...</td>
                            <td>Hạp Lĩnh- Bắc Ninh</td>
                            <td>
                                <a href="./accountEdit.html">Sửa</a>
                            </td>
                            <td>
                                <a href="./accounts.html?userId=3" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Huyền</td>
                            <td>Nữ</td>
                            <td>09...</td>
                            <td>Hạp Lĩnh- Bắc Ninh</td>
                            <td>
                                <a href="./accountEdit.html">Sửa</a>
                            </td>
                            <td>
                                <a href="./accounts.html?userId=4" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Huyền</td>
                            <td>Nữ</td>
                            <td>09...</td>
                            <td>Hạp Lĩnh- Bắc Ninh</td>
                            <td>
                                <a href="./accountEdit.html">Sửa</a>
                            </td>
                            <td>
                                <a href="./accounts.html?userId=5" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                    </table>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

<?php require_once './footer.php' ?>
