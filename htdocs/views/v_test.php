<?php
require("v_header.php");
?>
<!-- <link href="./css/content.css" rel="stylesheet" type="text/css"> -->
<!-- Start content room details -->
<div class="row">
<div class="col-sm-3 col-md-3">
            <h2 class="my-4">Tìm kiếm</h2>
            <form class="rounded form bg-light ">
                <div class="form-group">
                    <select class="form-control  mdb-select md-form colorful-select dropdown-primary d-block"
                        searchable="Search here..">
                        <option value="" disabled selected>Thành phố</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                        <option value="5">Option 5</option>
                    </select>
                </div>
                <div class=" form-group">
                    <select class="form-control mdb-select md-form colorful-select dropdown-primary d-block"
                        searchable="Search here..">
                        <option value="" disabled selected>Quận/Huyện</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                        <option value="5">Option 5</option>
                    </select>
                </div>
                <div class=" form-group">
                    <select class=" form-control mdb-select md-form colorful-select dropdown-primary d-block"
                        searchable="Search here..">
                        <option value="" disabled selected>Phường/Xã</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                        <option value="5">Option 5</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    <div class="col-md-9">
        <h2 class="my-4">Thông tin</h2>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Địa chỉ</th>
                    <td colspan="3">First</td>
                    <td><a href=""><span class="fa fa-mobile-phone"></span>Thông tin liên hệ</a></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Diện tích</th>
                    <td>Mark</td>
                    <th scope="row">Loại phòng</th>
                    <td>@mdo</td>
                    <td><a href=""><span class="fa fa-money-bill-wave-alt"></span>27,000,000 Đ/tháng</a></td>
                </tr>
                <tr>
                    <th scope="row">Tầng số</th>
                    <td>Jacob</td>
                    <th scope="row">Vệ sinh</th>
                    <td>@fat</td>
                    <td><a href=""><span class="fa fa-user"></span>Loan Nguyễn</a></td>
                </tr>
                <tr>
                    <th scope="row">Phòng ngủ</th>
                    <td>Jacob</td>
                    <th scope="row">Hướng nhà </th>
                    <td>@fat</td>
                    <td><a href=""><span class="fa fa-phone"></span>0366284567</a></td>
                </tr>
                <tr>
                    <th scope="row">Giá điện</th>
                    <td>Jacob</td>
                    <th scope="row">Giá nước</th>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">Tiện ích</th>
                    <td colspan="3">Jacob</td>
                </tr>
            </tbody>
        </table>
        <div class="content-image">
            <h2 class="my-4">Ảnh minh họa</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 h-100 img-fluid"
                            src="http://sao360.vn/static/Uploads/images/news/0/21/21214/1.png.1440.640.jpg"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 h-100 img-fluid"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgemq5NpvpBVTVB6lReH1jsuPqJMXGEScAqD8918ON04JcUeQg"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 h-100 img-fluid "
                            src="http://sao360.vn/static/Uploads/images/news/0/21/21214/1.png.1440.640.jpg"
                            alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="bg-light">
                    <h2 class="my-4">Mô tả</h2>
                    Bạn muốn tìm phòng trọ phù hợp với người đi làm, sinh viên đi học
                    ⛔⛔⛔ Đặc biệt điện 2k3/số. Tất cả sinh hoạt đều khép kín
                    ⛔ Giờ giấc thoải mái
                    ⛔ Không chung chủ, an ninh tốt
                    ⛔ Giá phòng vừa ví
                    ⛔ Có thể ở 2- 3 người không lo về giá
                    ⛔⛔⛔ Đặc biệt điện 2k3/số. Tất cả sinh hoạt đều khép kín
                </div>
            </div>

        </div>

    </div>

</div>
<!-- End content room details -->
<?php
require("v_footer.php");
?>