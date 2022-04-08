<?php require_once './headerAdmin.php' ?>

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row" style="margin: 40px 0px 40px 0px">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Chọn nhà cung cấp</span>
                    </div>
                    <ul>
                        <li><a href="./storeds.html"> Tất cả nhà cung cấp </a></li>
                        <li><a href="./storeds.html?providerId=1"> Nhà cung cấp A </a></li>
                        <li><a href="./storeds.html?providerId=2"> Nhà cung cấp B </a></li>
                        <li><a href="./storeds.html?providerId=>"> Nhà cung cấp C </a></li>
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
                        <a href="./storedsCreate.html" class="site-btn" name="btn-create" style="margin-left: 30px; ;height: 50px;">Thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <h2 style="text-align: center;">Danh sách nguyên liệu</h2>
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
                            <th>Nhà cung cấp</th>
                            <th>Tên nguyên liệu</th>
                            <th>Số lượng</th>
                            <th>Giá bán</th>
                            <th>Đơn vị tính </th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Nhà cung cấp A</td>          
                            <td>coffee</td>
                            <td>3</td>
                            <td>20.000VNĐ</td>
                            <td>Kg</td>
                            <td>
                                <a href="./storedEdit.html?id=1">Sửa</a>
                            </td>
                            <td>
                                <a href="./storeds.html?id=1" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nhà cung cấp B</td>             
                            <td>coffee</td>
                            <td>3</td>
                            <td>20.000VNĐ</td>
                            <td>Kg</td>
                            <td>
                                <a href="./storedEdit.html?id=2">Sửa</a>
                            </td>
                            <td>
                                <a href="./storeds.html?id=2" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Nhà cung cấp C</td>             
                            <td>coffee</td>
                            <td>3</td>
                            <td>20.000VNĐ</td>
                            <td>Kg</td>
                            <td>
                                <a href="./storedEdit.html?id=3">Sửa</a>
                            </td>
                            <td>
                                <a href="./storeds.html?id=3" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Nhà cung cấp D</td>             
                            <td>coffee</td>
                            <td>3</td>
                            <td>20.000VNĐ</td>
                            <td>Kg</td>
                            <td>
                                <a href="./storedEdit.html?id=4">Sửa</a>
                            </td>
                            <td>
                                <a href="./storeds.html?id=4" onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
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