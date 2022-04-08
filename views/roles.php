<?php  require_once './headerUser.php' ?>
<link rel="stylesheet" href="./public/css/style.css" type="text/css">
<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad" style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="shoping__cart__table">
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Tên chức vụ</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Admin</td>
                            <td>
                                <a href="./roleEdit.html?id=1">Sửa</a>
                            </td>
                            <td>
                                <a href="./roles.html?id=1"
                                    onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Khách hàng</td>
                            <td>
                                <a href="./roleEdit.html?id=2">Sửa</a>
                            </td>
                            <td>
                                <a href="./roles.html?id=2"
                                    onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Nhân viên pha chế</td>
                            <td>
                                <a href="./roleEdit.html?id=3">Sửa</a>
                            </td>
                            <td>
                                <a href="./roles.html?id=3"
                                    onclick="return confirm('Bạn có muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

<?php require_once './footer.php' ?>
