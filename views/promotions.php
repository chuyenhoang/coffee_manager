<?php require_once './headerAdmin.php' ?>


    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row" style="margin: 40px 0px 40px 0px">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Chọn năm</span>
                        </div>
                        <ul>
                            <li><a href="./account_list.html">Tất cả</a></li>
                            <li><a href="./account_list.html?year=2022">2022</a></li>
                            <li><a href="./account_list.html?year=2021">2021</a></li>
                            <li><a href="./account_list.html?year=2020">2020</a></li>
                            <li><a href="./account_list.html?year=2019">2019</a></li>
                            <li><a href="./account_list.html?year=2018">2018</a></li>
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
                            <a href="./promotionCreate.html" class="site-btn" name="btn-create"
                                style="margin-left: 30px; ;height: 50px;">Thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <h2 style="text-align: center;">Danh sách các chương trình khuyến mãi</h2>
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
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Hình ảnh</th>
                                <th>% giảm giá</th>
                                <th>Đơn hàng từ</th>
                                <th>Ngày bắt đầu</th>
                                <th>Ngày kết thúc</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Tiêu đề của chương trình giảm giá</td>
                                <td>Từ ngày 29/4/2022 đến ngày 1/5/2022 tại Coffee, Quý Khách Hàng khi mua hàng sẽ được
                                    giảm 10% cho đơn hàng từ 150k.</td>
                                <td>
                                    <img src="./img/banner/banner-1.jpg" alt="ảnh" width="150px">
                                </td>
                                <td>10 %</td>
                                <td>150000 đ</td>
                                <td>29/4/2022 </td>
                                <td>1/5/2022</td>
                                <td>
                                    <a href="./promotionEdit.html?id=1">Sửa</a>
                                </td>
                                <td>
                                    <a href="./promotions.html?id=1" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Tiêu đề của chương trình giảm giá</td>
                                <td>Từ ngày 29/4/2022 đến ngày 1/5/2022 tại Coffee, Quý Khách Hàng khi mua hàng sẽ được
                                    giảm 10% cho đơn hàng từ 150k.</td>
                                <td>
                                    <img src="./img/banner/banner-1.jpg" alt="ảnh" width="150px">
                                </td>
                                <td>10 %</td>
                                <td>150000 đ</td>
                                <td>29/4/2022 </td>
                                <td>1/5/2022</td>
                                <td>
                                    <a href="./promotionEdit.html?id=1">Sửa</a>
                                </td>
                                <td>
                                    <a href="./promotions.html?id=1" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Tiêu đề của chương trình giảm giá</td>
                                <td>Từ ngày 29/4/2022 đến ngày 1/5/2022 tại Coffee, Quý Khách Hàng khi mua hàng sẽ được
                                    giảm 10% cho đơn hàng từ 150k.</td>
                                <td>
                                    <img src="./img/banner/banner-1.jpg" alt="ảnh" width="150px">
                                </td>
                                <td>10 %</td>
                                <td>150000 đ</td>
                                <td>29/4/2022 </td>
                                <td>1/5/2022</td>
                                <td>
                                    <a href="./promotionEdit.html?id=1">Sửa</a>
                                </td>
                                <td>
                                    <a href="./promotions.html?id=1" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
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