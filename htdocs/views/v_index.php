<?php
require("v_header.php");
?>
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active"
                style="background-image: url('https://karmatrendz.files.wordpress.com/2010/02/the_black_house_07.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>First Slide</h3>
                    <p>This is a description for the first slide.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                style="background-image: url('https://pmcvariety.files.wordpress.com/2018/07/bradybunchhouse_sc11.jpg?w=1000&h=563&crop=1')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Second Slide</h3>
                    <p>This is a description for the second slide.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                style="background-image: url('https://cdn.vox-cdn.com/thumbor/9KHtq2E7Ua18ok5qlLnAv5kXLfY=/0x0:4256x2163/1200x800/filters:focal(1731x758:2411x1438)/cdn.vox-cdn.com/uploads/chorus_image/image/58387913/Flex_House_Exterior_6_13_17.0.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Third Slide</h3>
                    <p>This is a description for the third slide.</p>
                </div>
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
    </div>
</header>

<!-- Page Content -->
<div class="container">
    <!-- Portfolio Section -->
    <div class="row">
        <div class="col-sm-3">
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
        <div class="col-sm-9">
            <h2 class="my-4">Các phòng mới</h2>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top"
                                src="http://media.phongtot.vn/xc5tx4cj/cho-thue-san-van-phong-tai-86-le-trong-tan-thanh-xuan-ha-noi-gia-uu-dai-thumb-kqgto.jpg"
                                alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Project One</a>
                            </h4>
                            <a href=""><span class="fa fa-money-bill-wave-alt"></span>27,000,000 Đ/tháng</a>
                            <div class="extra">
                                <div class="float-left">
                                    <a href="#"><span class="fa fa-map-marker"></span>Từ Liêm</a>
                                </div>
                                <div class="float-right">
                                    <a href=""><span class="fa fa-info"></span>25 m<sup>2</sup></a>
                                </div>
                                <div class="float-left">
                                    <a href=""><span class="fa fa-home"></span>Phòng trọ, nhà trọ</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4  portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top"
                                src="http://media.phongtot.vn/xc5tx4cj/cho-thue-san-van-phong-tai-86-le-trong-tan-thanh-xuan-ha-noi-gia-uu-dai-thumb-kqgto.jpg"
                                alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Project Two</a>
                            </h4>
                            <a href=""><span class="fa fa-money-bill-wave-alt"></span>27,000,000 Đ/tháng</a>
                            <div class="extra">
                                <div class="float-left">
                                    <a href="#"><span class="fa fa-map-marker"></span>Từ Liêm</a>
                                </div>
                                <div class="float-right">
                                    <a href=""><span class="fa fa-info"></span>25 m<sup>2</sup></a>
                                </div>
                                <div class="float-left">
                                    <a href=""><span class="fa fa-home"></span>Phòng trọ, nhà trọ</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4  portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Project Three</a>
                            </h4>
                            <a href=""><span class="fa fa-money-bill-wave-alt"></span>27,000,000
                                Đ/tháng</a>
                            <div class="extra">
                                <div class="float-left">
                                    <a href="#"><span class="fa fa-map-marker"></span>Từ Liêm</a>
                                </div>
                                <div class="float-right">
                                    <a href=""><span class="fa fa-info"></span>25 m<sup>2</sup></a>
                                </div>
                                <div class="float-left">
                                    <a href=""><span class="fa fa-home"></span>Phòng trọ, nhà trọ</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 home-article-label">
                    <div class="float-left">
                        <a href="http://phongtot.vn/bai-viet">
                            <h3><span>bài viết</span> liên quan</h3>
                        </a>
                    </div>
                    <div class="float-right">
                        <a href=""></a>
                        <h3><a href="http://phongtot.vn/bai-viet">Xem thêm <i class="fa fa-angle-right"></i></a>
                        </h3>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                </div>
                <div class="col-md-7 left">

                    <div class="thumbnail thumb-big">
                        <a
                            href="http://phongtot.vn/bai-viet/ngoi-nha-46m%C2%B2-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo">
                            <img class="img-fluid"
                                src="http://media.phongtot.vn/xc5tx4cj/ngoi-nha-46m²-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo_cover-573eddf84424b.jpg"
                                alt="ngoi-nha-46m²-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo">
                            <h2 class="title">Ngôi nhà 46m² tuyệt đẹp có chi phí hoàn thiện 480 triệu đồng chàng trai 8x
                                xây tặng vợ</h2>
                        </a>
                        <div class="des">Ngôi nhà của Nguyễn Hoàng Hiệp tặng cho vợ sắp cưới không chỉ đẹp như nhà Tây
                            mà tổng chi phí xây dựng, thiết kế, trang trí chỉ vỏn vẹn ở con số 480 triệu đồng.</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 thumbnail ">
                            <a
                                href="http://phongtot.vn/bai-viet/y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu">
                                <img class="img-fluid"
                                    src="http://media.phongtot.vn/xc5tx4cj/y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu_cover-573dcbc3ac6e2.jpg"
                                    alt="y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu">
                                <h6 class="title"
                                    href="http://phongtot.vn/bai-viet/y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu">
                                    Ý tưởng kinh doanh nhà trọ, ngồi không mỗi tháng kiếm trăm triệu?</h6>
                            </a>
                        </div>
                        <div class="col-md-4 thumbnail ">
                            <a href="http://phongtot.vn/bai-viet/nhung-dieu-can-biet-khi-tim-phong-tro">
                                <img class="img-fluid"
                                    src="http://media.phongtot.vn/xc5tx4cj/nhung-dieu-can-biet-khi-tim-phong-tro_cover-5714ad734268d.jpg"
                                    alt="nhung-dieu-can-biet-khi-tim-phong-tro">
                                <h6 class="title"
                                    href="http://phongtot.vn/bai-viet/nhung-dieu-can-biet-khi-tim-phong-tro">
                                    Những điều cần biết khi tìm phòng trọ</h6>
                            </a>
                        </div>
                        <div class="col-md-4 thumbnail ">
                            <a
                                href="http://phongtot.vn/bai-viet/thiet-ke-can-ho-%E2%80%AA%E2%80%AC173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong">
                                <img class="img-fluid"
                                    src="http://media.phongtot.vn/xc5tx4cj/thiet-ke-can-ho-‪‬173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong_cover-57018c103e17a.jpg"
                                    alt="thiet-ke-can-ho-‪‬173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong">
                                <h6 class="title"
                                    href="http://phongtot.vn/bai-viet/thiet-ke-can-ho-%E2%80%AA%E2%80%AC173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong">
                                    Thiết kế căn hộ ‪‬173m2 cực đẹp với chi phí chỉ 17 triệu đồng</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 right">
                    <div class="row mb-2">
                        <div class="col-md-5 no-padding-vertical">
                            <a href="http://phongtot.vn/bai-viet/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">

                                <img class="img-fluid"
                                    src="http://media.phongtot.vn/xc5tx4cj/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien_cover-57018a97e544c.jpg"
                                    alt="pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">
                            </a>
                        </div>
                        <div class="col-md-7 no-padding-left">
                            <a href="http://phongtot.vn/bai-viet/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">

                                <h6 class="title"
                                    href="http://phongtot.vn/bai-viet/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">
                                    Phạm Hương mặc giản dị giao lưu cùng sinh viên</h6>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 no-padding-vertical">
                            <a href="http://phongtot.vn/bai-viet/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">

                                <img class="img-fluid"
                                    src="http://media.phongtot.vn/xc5tx4cj/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien_cover-57018a97e544c.jpg"
                                    alt="pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">
                            </a>
                        </div>
                        <div class="col-md-7 no-padding-left">
                            <a href="http://phongtot.vn/bai-viet/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">

                                <h6 class="title"
                                    href="http://phongtot.vn/bai-viet/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien">
                                    Phạm Hương mặc giản dị giao lưu cùng sinh viên</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Features Section -->

    <!-- /.row -->


</div>
<!-- End content -->
<?php
require("v_footer.php");
?>