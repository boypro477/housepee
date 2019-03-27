<?php
require("v_header.php");
?>
<link href="./css/content.css" rel="stylesheet" type="text/css">
<script>
$(document).ready(function () {
    $(".btn-select").each(function (e) {
        var value = $(this).find("ul li.selected").html();
        if (value != undefined) {
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(value);
        }
    });
});

$(document).on('click', '.btn-select', function (e) {
    e.preventDefault();
    var ul = $(this).find("ul");
    if ($(this).hasClass("active")) {
        if (ul.find("li").is(e.target)) {
            var target = $(e.target);
            target.addClass("selected").siblings().removeClass("selected");
            var value = target.val();
            var html = target.html();
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(html);
        }
        ul.hide();
        $(this).removeClass("active");
    }
    else {
        $('.btn-select').not(this).each(function () {
            $(this).removeClass("active").find("ul").hide();
        });
        ul.slideDown(300);
        $(this).addClass("active");
    }
});

$(document).on('click', function (e) {
    var target = $(e.target).closest(".btn-select");
    if (!target.length) {
        $(".btn-select").removeClass("active").find("ul").hide();
    }
});
</script>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12 room-main-content">
                    <div class="pt-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="http://phongtot.vn">Trang chủ</a></li>
                            <li class="active">Văn phòng</li>
                        </ol>
                    </div>
                    <div class="room-list-category">
                        <div class="pull-left">
                            <a href="">
                                <h3><span>Văn phòng</span> <i class="fa fa-angle-right"></i></h3>
                            </a>
                        </div>
                        <div class="pull-right">
                            <form id="order_form" class="form-inline form-oder-category" method="post"
                                action="http://phongtot.vn/order">
                                <input type="hidden" name="_token" value="mO1t5RbeC5jJ66OfNgeA6Cw5xViW5SFhQCaAu7oz">
                                <div class="form-group">
                                    <div class="btn btn-select btn-select-light">
                                        <span class="btn-select-value">Chọn thành phố</span>
                                        <span class="btn-select-arrow fa fa-angle-down"></span>
                                        <ul>
                                            <li class="fill-target"><a style="text-decoration: none;"
                                                    href="http://phongtot.vn/van-phong?fill=1">Hà Nội</a></li>
                                            <li class="fill-target"><a style="text-decoration: none;"
                                                    href="http://phongtot.vn/van-phong?fill=31">Hải Phòng</a></li>
                                            <li class="fill-target"><a style="text-decoration: none;"
                                                    href="http://phongtot.vn/van-phong?fill=48">Đà Nẵng</a></li>
                                            <li class="fill-target"><a style="text-decoration: none;"
                                                    href="http://phongtot.vn/van-phong?fill=79">Hồ Chí Minh</a></li>
                                            <li class="fill-target"><a style="text-decoration: none;"
                                                    href="http://phongtot.vn/van-phong?fill=92">Cần Thơ</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-select btn-select-light btn-oder-price">
                                        <input type="hidden" class="btn-select-input" id="price" name="price"
                                            value="null">
                                        <span class="btn-select-value">Sắp xếp giá</span>
                                        <span class="btn-select-arrow fa fa-angle-down"></span>
                                        <ul>
                                            <li class="get_price">Giá tăng dần</li>
                                            <li class="get_price">Giá giảm dần</li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-select btn-select-light btn-oder-time">
                                        <input type="hidden" class="btn-select-input" id="time" name="time" value="">
                                        <span class="btn-select-value">Sắp xếp thời gian</span>
                                        <span class="btn-select-arrow fa fa-angle-down"></span>
                                        <ul>
                                            <li class="get_time">Cũ nhất</li>
                                            <li class="get_time">Mới nhất</li>
                                        </ul>
                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                    </div>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        $('.get_price').on('click', function(e) {
                            var i = $(this).text();
                            price.value = i;
                            time.value = '';
                            $('#order_form').submit();
                        });
                        $('.get_time').on('click', function(e) {
                            var i = $(this).text();
                            price.value = '';
                            time.value = i;
                            $('#order_form').submit();
                        });
                        $('body').on('click', '.fill-target', function() {
                            window.location.href = $(this).find('a').attr('href');

                        });
                    });
                    </script>
                    <div class="room-list">
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/cho-thue-san-van-phong-tai-86-le-trong-tan-thanh-xuan-ha-noi-gia-uu-dai">Cho
                                            thuê sàn văn phòng tại 86 lê trọng tấn thanh xuân hà nội giá ưu đãi</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                      
                                        <img id="a1"class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/cho-thue-san-van-phong-tai-86-le-trong-tan-thanh-xuan-ha-noi-gia-uu-dai-thumb-kqgto.jpg"
                                                    alt="">
                                  
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>86 Lê Trọng Tấn
                                                Lê Trọng Tấn - Khương Mai - Thanh Xuân - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>47m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    3 ngày trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>15,000,000 Đ/tháng</a>
                                        </div>
                                     
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/cho-thue-san-van-phong-tai-86-le-trong-tan-thanh-xuan-ha-noi-gia-uu-dai">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/cho-thue-san-van-phong-tai-86-le-trong-tan-thanh-xuan-ha-noi-gia-uu-dai"
                                                href="http://phongtot.vn/luu-tin/van-phong/cho-thue-san-van-phong-tai-86-le-trong-tan-thanh-xuan-ha-noi-gia-uu-dai">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/cho-thue-van-phong-cao-cap-khu-vuc-thanh-xuan-ha-noi-dt-47m2-gia-15trthang-lh-0366284567">Cho
                                            thuê văn phòng cao cấp khu vực Thanh Xuân Hà Nội dt 47m2 giá 15tr/tháng lh
                                            0366.28.4567</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/cho-thue-van-phong-cao-cap-khu-vuc-thanh-xuan-ha-noi-dt-47m2-gia-15trthang-lh-0366284567">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-cao-cap-khu-vuc-thanh-xuan-ha-noi-dt-47m2-gia-15trthang-lh-0366284567-thumb-aip7a.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-cao-cap-khu-vuc-thanh-xuan-ha-noi-dt-47m2-gia-15trthang-lh-0366284567-aip7a.jpg" alt="Cho thu&ecirc; văn ph&ograve;ng cao cấp khu vực Thanh Xu&acirc;n H&agrave; Nội dt 47m2 gi&aacute; 15tr/th&aacute;ng lh 0366.28.4567">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>86 Lê Trọng Tấn
                                                Lê Trọng Tấn - Khương Mai - Thanh Xuân - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>47m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    4 ngày trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>15,000,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>CHO THUÊ VĂN PHÒNG HẠNG B MẶT PHỐ LÊ TRỌNG TẤN THANH XU N HÀ NỘI 
Địa chỉ: 86 Lê Trọng Tấn, Khương......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/cho-thue-van-phong-cao-cap-khu-vuc-thanh-xuan-ha-noi-dt-47m2-gia-15trthang-lh-0366284567">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/cho-thue-van-phong-cao-cap-khu-vuc-thanh-xuan-ha-noi-dt-47m2-gia-15trthang-lh-0366284567"
                                                href="http://phongtot.vn/luu-tin/van-phong/cho-thue-van-phong-cao-cap-khu-vuc-thanh-xuan-ha-noi-dt-47m2-gia-15trthang-lh-0366284567">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918">Cho
                                            thuê sàn thương mại, văn phòng công ty toà nhà Newhouse Xa La - Khu đô thị
                                            Xa La. LH 0972015918</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918-thumb-resized-bjxjp.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918-resized-marrs.jpg" alt="Cho thu&ecirc; s&agrave;n thương mại, văn ph&ograve;ng c&ocirc;ng ty to&agrave; nh&agrave; Newhouse Xa La - Khu đ&ocirc; thị Xa La. LH 0972015918">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918-resized-veirr.jpg" alt="Cho thu&ecirc; s&agrave;n thương mại, văn ph&ograve;ng c&ocirc;ng ty to&agrave; nh&agrave; Newhouse Xa La - Khu đ&ocirc; thị Xa La. LH 0972015918">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918-resized-bjxjp.jpg" alt="Cho thu&ecirc; s&agrave;n thương mại, văn ph&ograve;ng c&ocirc;ng ty to&agrave; nh&agrave; Newhouse Xa La - Khu đ&ocirc; thị Xa La. LH 0972015918">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918-resized-xwwyz.jpg" alt="Cho thu&ecirc; s&agrave;n thương mại, văn ph&ograve;ng c&ocirc;ng ty to&agrave; nh&agrave; Newhouse Xa La - Khu đ&ocirc; thị Xa La. LH 0972015918">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918-resized-qufir.jpg" alt="Cho thu&ecirc; s&agrave;n thương mại, văn ph&ograve;ng c&ocirc;ng ty to&agrave; nh&agrave; Newhouse Xa La - Khu đ&ocirc; thị Xa La. LH 0972015918">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918-resized-z2pi8.jpg" alt="Cho thu&ecirc; s&agrave;n thương mại, văn ph&ograve;ng c&ocirc;ng ty to&agrave; nh&agrave; Newhouse Xa La - Khu đ&ocirc; thị Xa La. LH 0972015918">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918-resized-whatc.jpg" alt="Cho thu&ecirc; s&agrave;n thương mại, văn ph&ograve;ng c&ocirc;ng ty to&agrave; nh&agrave; Newhouse Xa La - Khu đ&ocirc; thị Xa La. LH 0972015918">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>NEWHOUSE XA LA
                                                Xa La - Phúc La - Hà Đông - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>50m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    1 tuần trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>8,000,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>Cho thuê tòa văn phòng Newhouse Xa La Hà Đông.
Vị trí: Khu đô thị Xa La, Hà Đông - Đầu cầu Kiến Hưn......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918"
                                                href="http://phongtot.vn/luu-tin/van-phong/cho-thue-san-thuong-mai-van-phong-cong-ty-toa-nha-newhouse-xa-la-khu-do-thi-xa-la-lh-0972015918">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/cho-thue-phong-hoc-van-phong-theo-gio-tai-khu-vuc-mieu-dam">Cho
                                            thuê phòng học, văn phòng theo giờ tại khu vực Miếu Đầm</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/cho-thue-phong-hoc-van-phong-theo-gio-tai-khu-vuc-mieu-dam">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/cho-thue-phong-hoc-van-phong-theo-gio-tai-khu-vuc-mieu-dam-thumb-j32dt.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-phong-hoc-van-phong-theo-gio-tai-khu-vuc-mieu-dam-j32dt.jpg" alt="Cho thu&ecirc; ph&ograve;ng học, văn ph&ograve;ng theo giờ tại khu vực Miếu Đầm">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>Tầng 4, số 18 Miếu Đầm, phường Mễ Trì, Quận Nam Từ Liêm. Thành phố Hà
                                                Nội, Việt Nam.
                                                Mễ Trì - Từ Liêm - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>35m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    3 tuần trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>100,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>Cho thuê phòng học, phòng họp, văn phòng theo giờ tại Miếu Đầm
Lượng chứa: 35 - 70 học viên
Địa ch......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/cho-thue-phong-hoc-van-phong-theo-gio-tai-khu-vuc-mieu-dam">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/cho-thue-phong-hoc-van-phong-theo-gio-tai-khu-vuc-mieu-dam"
                                                href="http://phongtot.vn/luu-tin/van-phong/cho-thue-phong-hoc-van-phong-theo-gio-tai-khu-vuc-mieu-dam">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/chu-nha-cho-thue-phong-o-hoac-lam-van-phong-kinh-doang-online-2-phong-tac-biet1wc">Chủ
                                            nhà cho thuê phòng ở hoặc làm văn phòng, kinh doang online ( 2 phòng tác
                                            biệt+1Wc) </a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/chu-nha-cho-thue-phong-o-hoac-lam-van-phong-kinh-doang-online-2-phong-tac-biet1wc">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/chu-nha-cho-thue-phong-o-hoac-lam-van-phong-kinh-doang-online-2-phong-tac-biet1wc-thumb-resized-rceus.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chu-nha-cho-thue-phong-o-hoac-lam-van-phong-kinh-doang-online-2-phong-tac-biet1wc-resized-k6t1g.jpg" alt="Chủ nh&agrave; cho thu&ecirc; ph&ograve;ng ở hoặc l&agrave;m văn ph&ograve;ng, kinh doang online ( 2 ph&ograve;ng t&aacute;c biệt+1Wc) ">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chu-nha-cho-thue-phong-o-hoac-lam-van-phong-kinh-doang-online-2-phong-tac-biet1wc-resized-s1ze5.jpg" alt="Chủ nh&agrave; cho thu&ecirc; ph&ograve;ng ở hoặc l&agrave;m văn ph&ograve;ng, kinh doang online ( 2 ph&ograve;ng t&aacute;c biệt+1Wc) ">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chu-nha-cho-thue-phong-o-hoac-lam-van-phong-kinh-doang-online-2-phong-tac-biet1wc-resized-rceus.jpg" alt="Chủ nh&agrave; cho thu&ecirc; ph&ograve;ng ở hoặc l&agrave;m văn ph&ograve;ng, kinh doang online ( 2 ph&ograve;ng t&aacute;c biệt+1Wc) ">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chu-nha-cho-thue-phong-o-hoac-lam-van-phong-kinh-doang-online-2-phong-tac-biet1wc-resized-qjaal.jpg" alt="Chủ nh&agrave; cho thu&ecirc; ph&ograve;ng ở hoặc l&agrave;m văn ph&ograve;ng, kinh doang online ( 2 ph&ograve;ng t&aacute;c biệt+1Wc) ">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chu-nha-cho-thue-phong-o-hoac-lam-van-phong-kinh-doang-online-2-phong-tac-biet1wc-resized-fbcjx.jpg" alt="Chủ nh&agrave; cho thu&ecirc; ph&ograve;ng ở hoặc l&agrave;m văn ph&ograve;ng, kinh doang online ( 2 ph&ograve;ng t&aacute;c biệt+1Wc) ">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>Giang Văn Minh, Giảng Võ
                                                Giang Văn Minh - Giảng Võ - Ba Đình - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>45m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    3 tuần trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>4,000,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>
Khu Vực trung tâm thành phố, giao thông thuận tiện.dân trí cao, nhiều công chức nhà nước nên có kh......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/chu-nha-cho-thue-phong-o-hoac-lam-van-phong-kinh-doang-online-2-phong-tac-biet1wc">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/chu-nha-cho-thue-phong-o-hoac-lam-van-phong-kinh-doang-online-2-phong-tac-biet1wc"
                                                href="http://phongtot.vn/luu-tin/van-phong/chu-nha-cho-thue-phong-o-hoac-lam-van-phong-kinh-doang-online-2-phong-tac-biet1wc">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/cho-thue-van-phong-hang-b-tran-quoc-toan-dt-38m2-gia-168trthang-ngay-trung-tam-thanh-pho">Cho
                                            thuê văn phòng Hạng B Trần Quốc Toản dt 38m2 giá 16,8tr/tháng ngay trung tâm
                                            thành phố</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/cho-thue-van-phong-hang-b-tran-quoc-toan-dt-38m2-gia-168trthang-ngay-trung-tam-thanh-pho">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-hang-b-tran-quoc-toan-dt-38m2-gia-168trthang-ngay-trung-tam-thanh-pho-thumb-ichm2.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-hang-b-tran-quoc-toan-dt-38m2-gia-168trthang-ngay-trung-tam-thanh-pho-ichm2.jpg" alt="Cho thu&ecirc; văn ph&ograve;ng Hạng B Trần Quốc Toản dt 38m2 gi&aacute; 16,8tr/th&aacute;ng ngay trung t&acirc;m th&agrave;nh phố">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>57 Trần Quốc Toản
                                                Trần Quốc Toản - Hàng Bài - Hoàn Kiếm - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>38m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    2 tháng trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>16,800,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>Cho thuê văn phòng cao cấp hạng B tại hà nội
Địa chỉ: 57 - Trần Quốc Toản - Hoàn Kiếm - Hà Nội
Diệ......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/cho-thue-van-phong-hang-b-tran-quoc-toan-dt-38m2-gia-168trthang-ngay-trung-tam-thanh-pho">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/cho-thue-van-phong-hang-b-tran-quoc-toan-dt-38m2-gia-168trthang-ngay-trung-tam-thanh-pho"
                                                href="http://phongtot.vn/luu-tin/van-phong/cho-thue-van-phong-hang-b-tran-quoc-toan-dt-38m2-gia-168trthang-ngay-trung-tam-thanh-pho">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/chinh-chu-cho-san-t2-lam-van-phong-hoac-kinh-doanh-online">Chính
                                            Chủ cho Sàn T2 làm Văn Phòng Hoặc Kinh Doanh Online</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/chinh-chu-cho-san-t2-lam-van-phong-hoac-kinh-doanh-online">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/chinh-chu-cho-san-t2-lam-van-phong-hoac-kinh-doanh-online-thumb-7xzr1.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chinh-chu-cho-san-t2-lam-van-phong-hoac-kinh-doanh-online-resized-dnffd.jpg" alt="Ch&iacute;nh Chủ cho S&agrave;n T2 l&agrave;m Văn Ph&ograve;ng Hoặc Kinh Doanh Online">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chinh-chu-cho-san-t2-lam-van-phong-hoac-kinh-doanh-online-7xzr1.jpg" alt="Ch&iacute;nh Chủ cho S&agrave;n T2 l&agrave;m Văn Ph&ograve;ng Hoặc Kinh Doanh Online">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chinh-chu-cho-san-t2-lam-van-phong-hoac-kinh-doanh-online-resized-dnnkj.jpg" alt="Ch&iacute;nh Chủ cho S&agrave;n T2 l&agrave;m Văn Ph&ograve;ng Hoặc Kinh Doanh Online">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chinh-chu-cho-san-t2-lam-van-phong-hoac-kinh-doanh-online-resized-ylvk6.jpg" alt="Ch&iacute;nh Chủ cho S&agrave;n T2 l&agrave;m Văn Ph&ograve;ng Hoặc Kinh Doanh Online">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>Số 28, ngõ 44 Phạm Thận Duật
                                                Phạm Thận Duật - Mai Dịch - Cầu Giấy - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>30m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    3 tháng trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>4,200,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>Hiện tại Nhà Mình Còn trống 1 Phòng trên T2 -Trong Nhà 6 Tầng muốn cho thuê - Bếp nấu ăn ngay đối di......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/chinh-chu-cho-san-t2-lam-van-phong-hoac-kinh-doanh-online">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/chinh-chu-cho-san-t2-lam-van-phong-hoac-kinh-doanh-online"
                                                href="http://phongtot.vn/luu-tin/van-phong/chinh-chu-cho-san-t2-lam-van-phong-hoac-kinh-doanh-online">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu">Cho
                                            thuê văn phòng tại Điện Biên Phủ Q1 – 2 Chiều</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu-thumb-vebnj.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu-vebnj.jpg" alt="Cho thu&ecirc; văn ph&ograve;ng tại Điện Bi&ecirc;n Phủ Q1 &ndash; 2 Chiều">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu-resized-pycve.jpg" alt="Cho thu&ecirc; văn ph&ograve;ng tại Điện Bi&ecirc;n Phủ Q1 &ndash; 2 Chiều">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu-resized-0unqp.jpg" alt="Cho thu&ecirc; văn ph&ograve;ng tại Điện Bi&ecirc;n Phủ Q1 &ndash; 2 Chiều">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu-mcqq6.jpg" alt="Cho thu&ecirc; văn ph&ograve;ng tại Điện Bi&ecirc;n Phủ Q1 &ndash; 2 Chiều">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu-caftx.jpg" alt="Cho thu&ecirc; văn ph&ograve;ng tại Điện Bi&ecirc;n Phủ Q1 &ndash; 2 Chiều">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu-resized-jegsy.jpg" alt="Cho thu&ecirc; văn ph&ograve;ng tại Điện Bi&ecirc;n Phủ Q1 &ndash; 2 Chiều">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu-resized-v7pda.jpg" alt="Cho thu&ecirc; văn ph&ograve;ng tại Điện Bi&ecirc;n Phủ Q1 &ndash; 2 Chiều">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>62 điện biên phủ
                                                Điện Biên Phủ - Đa Kao - 1 - Hồ Chí Minh </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>20m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    3 tháng trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>8,000,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>-         Mặt tiền đường điện biênphủ (đường 40m, 2 chiều, phường đakao , quận 1, tp.hcm ), khu thươ......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu"
                                                href="http://phongtot.vn/luu-tin/van-phong/cho-thue-van-phong-tai-dien-bien-phu-q1-2-chieu">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/cho-thue-van-phong-cao-cap-tai-truong-han-sieu-quan-hoan-kiem-gia-uu-dai-dt-tu-40m2-gia-11trthang">cho
                                            thuê văn phòng cao cấp tại Trương Hán Siêu quận Hoàn KIếm giá ưu đãi dt từ
                                            40m2 giá 11tr/tháng</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/cho-thue-van-phong-cao-cap-tai-truong-han-sieu-quan-hoan-kiem-gia-uu-dai-dt-tu-40m2-gia-11trthang">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-cao-cap-tai-truong-han-sieu-quan-hoan-kiem-gia-uu-dai-dt-tu-40m2-gia-11trthang-thumb-ozaeb.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-cao-cap-tai-truong-han-sieu-quan-hoan-kiem-gia-uu-dai-dt-tu-40m2-gia-11trthang-plmeu.jpg" alt="cho thu&ecirc; văn ph&ograve;ng cao cấp tại Trương H&aacute;n Si&ecirc;u quận Ho&agrave;n KIếm gi&aacute; ưu đ&atilde;i dt từ 40m2 gi&aacute; 11tr/th&aacute;ng">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-cao-cap-tai-truong-han-sieu-quan-hoan-kiem-gia-uu-dai-dt-tu-40m2-gia-11trthang-ozaeb.jpg" alt="cho thu&ecirc; văn ph&ograve;ng cao cấp tại Trương H&aacute;n Si&ecirc;u quận Ho&agrave;n KIếm gi&aacute; ưu đ&atilde;i dt từ 40m2 gi&aacute; 11tr/th&aacute;ng">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-cao-cap-tai-truong-han-sieu-quan-hoan-kiem-gia-uu-dai-dt-tu-40m2-gia-11trthang-prtsl.jpg" alt="cho thu&ecirc; văn ph&ograve;ng cao cấp tại Trương H&aacute;n Si&ecirc;u quận Ho&agrave;n KIếm gi&aacute; ưu đ&atilde;i dt từ 40m2 gi&aacute; 11tr/th&aacute;ng">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>12 Trương Hán Siêu
                                                Trương Hán Siêu - Trần Hưng Đạo - Hoàn Kiếm - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>40m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    3 tháng trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>11,000,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>Cho thuê văn phòng cao cấp tại Hà Nội. 
Địa chỉ: Trương Hán Siêu. 
Diện tích cho thuê: 40m2. 
Giá......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/cho-thue-van-phong-cao-cap-tai-truong-han-sieu-quan-hoan-kiem-gia-uu-dai-dt-tu-40m2-gia-11trthang">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/cho-thue-van-phong-cao-cap-tai-truong-han-sieu-quan-hoan-kiem-gia-uu-dai-dt-tu-40m2-gia-11trthang"
                                                href="http://phongtot.vn/luu-tin/van-phong/cho-thue-van-phong-cao-cap-tai-truong-han-sieu-quan-hoan-kiem-gia-uu-dai-dt-tu-40m2-gia-11trthang">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/chinh-chu-cho-thue-phong-lam-van-phong-hoac-de-o-tai-cau-giay-pham-tuan-tai-lh-0984709138">[Chính
                                            Chủ Cho Thuê Phòng] Làm Văn Phòng Hoặc Để Ở tại Cầu Giấy - Phạm Tuấn Tài Lh:
                                            0984709138</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/chinh-chu-cho-thue-phong-lam-van-phong-hoac-de-o-tai-cau-giay-pham-tuan-tai-lh-0984709138">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/chinh-chu-cho-thue-phong-lam-van-phong-hoac-de-o-tai-cau-giay-pham-tuan-tai-lh-0984709138-thumb-jrgtb.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chinh-chu-cho-thue-phong-lam-van-phong-hoac-de-o-tai-cau-giay-pham-tuan-tai-lh-0984709138-resized-jq4mf.jpg" alt="[Ch&iacute;nh Chủ Cho Thu&ecirc; Ph&ograve;ng] L&agrave;m Văn Ph&ograve;ng Hoặc Để Ở tại Cầu Giấy - Phạm Tuấn T&agrave;i Lh: 0984709138">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chinh-chu-cho-thue-phong-lam-van-phong-hoac-de-o-tai-cau-giay-pham-tuan-tai-lh-0984709138-jrgtb.jpg" alt="[Ch&iacute;nh Chủ Cho Thu&ecirc; Ph&ograve;ng] L&agrave;m Văn Ph&ograve;ng Hoặc Để Ở tại Cầu Giấy - Phạm Tuấn T&agrave;i Lh: 0984709138">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chinh-chu-cho-thue-phong-lam-van-phong-hoac-de-o-tai-cau-giay-pham-tuan-tai-lh-0984709138-juquh.jpg" alt="[Ch&iacute;nh Chủ Cho Thu&ecirc; Ph&ograve;ng] L&agrave;m Văn Ph&ograve;ng Hoặc Để Ở tại Cầu Giấy - Phạm Tuấn T&agrave;i Lh: 0984709138">
                    </div> -->
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/chinh-chu-cho-thue-phong-lam-van-phong-hoac-de-o-tai-cau-giay-pham-tuan-tai-lh-0984709138-resized-2ynkr.jpg" alt="[Ch&iacute;nh Chủ Cho Thu&ecirc; Ph&ograve;ng] L&agrave;m Văn Ph&ograve;ng Hoặc Để Ở tại Cầu Giấy - Phạm Tuấn T&agrave;i Lh: 0984709138">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>Số 8, ngõ 12 PhạmTuấn Tài
                                                Phạm Tuấn Tài - Nghĩa Tân - Cầu Giấy - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>35m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    4 tháng trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>5,000,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>...</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/chinh-chu-cho-thue-phong-lam-van-phong-hoac-de-o-tai-cau-giay-pham-tuan-tai-lh-0984709138">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/chinh-chu-cho-thue-phong-lam-van-phong-hoac-de-o-tai-cau-giay-pham-tuan-tai-lh-0984709138"
                                                href="http://phongtot.vn/luu-tin/van-phong/chinh-chu-cho-thue-phong-lam-van-phong-hoac-de-o-tai-cau-giay-pham-tuan-tai-lh-0984709138">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a href="http://phongtot.vn/van-phong/cho-thue-van-phong-thu-duc-gia-re">Cho
                                            Thuê Văn Phòng Thủ Đức Giá Rẻ</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/cho-thue-van-phong-thu-duc-gia-re">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-thu-duc-gia-re-thumb-enfrd.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-van-phong-thu-duc-gia-re-enfrd.jpg" alt="Cho Thu&ecirc; Văn Ph&ograve;ng Thủ Đức Gi&aacute; Rẻ">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>08 nguyễn thị nhung
                                                Quốc Lộ 13 - Hiệp Bình Phước - Thủ Đức - Hồ Chí Minh </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>60m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    5 tháng trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>700,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>Được trang bị đầy đủ:
- Trang bị bàn ghế và tủ hồ sơ cá nhân riêng cho mỗi vị trí.
- Có quầy lễ tâ......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/cho-thue-van-phong-thu-duc-gia-re">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/cho-thue-van-phong-thu-duc-gia-re"
                                                href="http://phongtot.vn/luu-tin/van-phong/cho-thue-van-phong-thu-duc-gia-re">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/cho-thue-nha-nguyen-can-kdc-phu-thuan-4-x-18m-3-lau-gia-22trth">Cho
                                            thuê nhà nguyên căn KDC Phú Thuận 4 x 18m, 3 lầu, giá 22tr/th</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/cho-thue-nha-nguyen-can-kdc-phu-thuan-4-x-18m-3-lau-gia-22trth">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/cho-thue-nha-nguyen-can-kdc-phu-thuan-4-x-18m-3-lau-gia-22trth-thumb-2crdr.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/cho-thue-nha-nguyen-can-kdc-phu-thuan-4-x-18m-3-lau-gia-22trth-2crdr.jpg" alt="Cho thu&ecirc; nh&agrave; nguy&ecirc;n căn KDC Ph&uacute; Thuận 4 x 18m, 3 lầu, gi&aacute; 22tr/th">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>phú Thuận, Quận 7
                                                1 - Phú Thuận - 7 - Hồ Chí Minh </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>80m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    5 tháng trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>22,000,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>Cho thuê nhà lầu nguyên căn đường số lô C KDC Phú Thuận, phường Phú Thuạn quận 7. 
Nhà 1 trệt 3 lầu......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/cho-thue-nha-nguyen-can-kdc-phu-thuan-4-x-18m-3-lau-gia-22trth">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/cho-thue-nha-nguyen-can-kdc-phu-thuan-4-x-18m-3-lau-gia-22trth"
                                                href="http://phongtot.vn/luu-tin/van-phong/cho-thue-nha-nguyen-can-kdc-phu-thuan-4-x-18m-3-lau-gia-22trth">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/van-phong-tai-duong-nguyen-luong-bang-cho-thue-hot-gia-re-90m2">Văn
                                            phòng tại đường nguyễn lương bằng cho thuê hót giá rẻ 90m2</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/van-phong-tai-duong-nguyen-luong-bang-cho-thue-hot-gia-re-90m2">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/van-phong-tai-duong-nguyen-luong-bang-cho-thue-hot-gia-re-90m2-thumb-tc3ka.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/van-phong-tai-duong-nguyen-luong-bang-cho-thue-hot-gia-re-90m2-tc3ka.jpg" alt="Văn ph&ograve;ng tại đường nguyễn lương bằng cho thu&ecirc; h&oacute;t gi&aacute; rẻ 90m2">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>Nguyễn Lương Bằng
                                                Nguyễn Lương Bằng - Quang Trung - Đống Đa - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>90m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    9 tháng trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>20,000,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>Cho thuê Văn phòng cao cấp tại đường Nguyễn Lương Bằng
Diện tích sử dụng: 90m2
Còn trống tầng 2,3,......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/van-phong-tai-duong-nguyen-luong-bang-cho-thue-hot-gia-re-90m2">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/van-phong-tai-duong-nguyen-luong-bang-cho-thue-hot-gia-re-90m2"
                                                href="http://phongtot.vn/luu-tin/van-phong/van-phong-tai-duong-nguyen-luong-bang-cho-thue-hot-gia-re-90m2">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/van-phong-nguyen-luong-bang-cho-thue-90m2-20-trieu-thang-tang-2">Văn
                                            phòng Nguyễn Lương Bằng cho thuê 90m2 / 20 triệu /tháng /tầng 2</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/van-phong-nguyen-luong-bang-cho-thue-90m2-20-trieu-thang-tang-2">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/van-phong-nguyen-luong-bang-cho-thue-90m2-20-trieu-thang-tang-2-thumb-iokqx.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/van-phong-nguyen-luong-bang-cho-thue-90m2-20-trieu-thang-tang-2-iokqx.jpg" alt="Văn ph&ograve;ng Nguyễn Lương Bằng cho thu&ecirc; 90m2 / 20 triệu /th&aacute;ng /tầng 2">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>200 Nguyễn Lương Bằng
                                                Nguyễn Lương Bằng - Quang Trung - Đống Đa - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>90m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    9 tháng trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>20,000,000 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>Cho thuê văn phòng mặt đường Nguyễn Lương Bằng 
- DIỆN TÍCH: 90m2 
- Tầng: 2 
- Giá thuê: 20tr/th......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/van-phong-nguyen-luong-bang-cho-thue-90m2-20-trieu-thang-tang-2">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/van-phong-nguyen-luong-bang-cho-thue-90m2-20-trieu-thang-tang-2"
                                                href="http://phongtot.vn/luu-tin/van-phong/van-phong-nguyen-luong-bang-cho-thue-90m2-20-trieu-thang-tang-2">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="room-item">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-room-item-title">
                                        <a
                                            href="http://phongtot.vn/van-phong/van-phong-chua-lang-cho-thue-cuc-hot-gia-re-chi-9tr-thang">Văn
                                            phòng chùa láng cho thuê cực hót giá rẻ chỉ 9tr tháng</a>
                                    </div>
                                    <div class="col-md-3 room-item-thumbnail">
                                        <div class="row">
                                            <a class="col-md-12 thumbnail room-item-main-img"
                                                href="http://phongtot.vn/van-phong/van-phong-chua-lang-cho-thue-cuc-hot-gia-re-chi-9tr-thang">
                                                <img class="img-responsive"
                                                    src="http://media.phongtot.vn/xc5tx4cj/van-phong-chua-lang-cho-thue-cuc-hot-gia-re-chi-9tr-thang-thumb-resized-fsqyj.jpg"
                                                    alt="">
                                            </a>
                                            <!-- <div class="col-md-4 thumbnail">
                        <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/van-phong-chua-lang-cho-thue-cuc-hot-gia-re-chi-9tr-thang-resized-fsqyj.jpg" alt="Văn ph&ograve;ng ch&ugrave;a l&aacute;ng cho thu&ecirc; cực h&oacute;t gi&aacute; rẻ chỉ 9tr th&aacute;ng">
                    </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-9 room-item-i">
                                        <div class="block-room-item-address">
                                            <span>Địa chỉ: </span>
                                            <a>71 Chùa Láng
                                                Chùa Láng - Láng Thượng - Đống Đa - Hà Nội </a>
                                        </div>
                                        <div class="block-room-item-info">
                                            <div class="pull-left">
                                                <span>Diện tích: </span><a>35m2</a>
                                            </div>
                                            <div class="pull-right item-info-date">
                                                <a>
                                                    9 tháng trước </a>
                                            </div>
                                            <div class="item-info-vs">
                                                <span>Vệ sinh: </span><a>chưa rõ</a>
                                            </div>
                                        </div>
                                        <div class="block-room-item-price">
                                            <span>Giá cả: </span><a>9 Đ/tháng</a>
                                        </div>
                                        <!-- <div class="block-room-item-des">
                    <span>*Tại phố Chùa Láng, quận Đống Đa, chúng tôi có tòa nhà hạng B, đã setup đầy đủ tiện ích, khách hàng......</span>
                </div> -->
                                        <div class="block-room-item-btn">
                                            <a class="btn btn-room-detail"
                                                href="http://phongtot.vn/van-phong/van-phong-chua-lang-cho-thue-cuc-hot-gia-re-chi-9tr-thang">Xem
                                                chi tiết</a>
                                            <a class="btn btn-room-save"
                                                _url="http://phongtot.vn/luu-tin-ajax/van-phong/van-phong-chua-lang-cho-thue-cuc-hot-gia-re-chi-9tr-thang"
                                                href="http://phongtot.vn/luu-tin/van-phong/van-phong-chua-lang-cho-thue-cuc-hot-gia-re-chi-9tr-thang">Lưu
                                                tin</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        $('.btn-room-save').on('click', function(e) {
                            var i = $(this);
                            var div = i.parent();
                            $.ajax({
                                url: i.attr('_url'),
                                type: 'GET',
                                dataType: 'json',
                                success: function(result) {
                                    i.remove();
                                    div.append(result);
                                    setTimeout(function() {
                                        $('.flash-mesage').remove();
                                    }, 1000);
                                }
                            });
                        });
                    });
                    </script>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-right">
                                <ul class="pagination">
                                    <li class="disabled"><span>«</span></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="http://phongtot.vn/van-phong?page=2">2</a></li>
                                    <li><a href="http://phongtot.vn/van-phong?page=3">3</a></li>
                                    <li><a href="http://phongtot.vn/van-phong?page=4">4</a></li>
                                    <li><a href="http://phongtot.vn/van-phong?page=5">5</a></li>
                                    <li><a href="http://phongtot.vn/van-phong?page=6">6</a></li>
                                    <li><a href="http://phongtot.vn/van-phong?page=7">7</a></li>
                                    <li><a href="http://phongtot.vn/van-phong?page=8">8</a></li>
                                    <li class="disabled"><span>...</span></li>
                                    <li><a href="http://phongtot.vn/van-phong?page=22">22</a></li>
                                    <li><a href="http://phongtot.vn/van-phong?page=23">23</a></li>
                                    <li><a href="http://phongtot.vn/van-phong?page=2" rel="next">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 sidebar">
            <div class="row">
                <div class="col-sm-6 col-md-12">
                    <div class="advance-search">
                        <div class="title">
                            <a id="submit_search" href="javascript:void(0);"><span class="fa fa-search"></span></a>Tìm
                            kiếm nâng cao
                        </div>
                        <div class="shr">
                            <hr>
                        </div>
                        <form class="form" id="search_form" action="http://phongtot.vn/tim-kiem" method="GET">
                            <div class="form-group tp">
                                <a class="btn btn-select btn-select-light btn-tp">
                                    <input type="hidden" class="btn-select-input" id="province" name="province"
                                        value="">
                                    <span class="btn-select-value">Chọn tỉnh, thành phố</span>
                                    <span class="btn-select-arrow fa fa-angle-down"></span>
                                    <ul>
                                        <li class="get_province" value="1"> Hà Nội</li>
                                        <li class="get_province" value="31"> Hải Phòng</li>
                                        <li class="get_province" value="48"> Đà Nẵng</li>
                                        <li class="get_province" value="79"> Hồ Chí Minh</li>
                                        <li class="get_province" value="92"> Cần Thơ</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="form-group">
                                <a class="btn btn-select btn-select-light btn-tp">
                                    <input type="hidden" class="btn-select-input" id="district" name="district"
                                        value="">
                                    <span id="district-select" class="btn-select-value">Chọn quận, huyện</span>
                                    <span class="btn-select-arrow fa fa-angle-down"></span>
                                    <ul id="districtGroup">
                                    </ul>
                                </a>
                            </div>
                            <script>
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Quận Huyện",
                                // position: 'top',
                                // maxHeight: 400
                            });
                            </script>
                            <div class="form-group">
                                <select id="wardGroup" name="ward[]" multiple="multiple" style="display: none;">
                                </select>
                                <div class="ms-parent " style="width: 100%;"><button type="button"
                                        class="ms-choice"><span class="placeholder">Chọn Phường Xã</span>
                                        <div class="fa fa-angle-down"></div>
                                    </button>
                                    <div class="ms-drop bottom">
                                        <ul style="max-height: 250px;">
                                            <li class="ms-no-results">No matches found</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <script>
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Phường Xã",
                                // position: 'top',
                                // maxHeight: 400
                            });
                            </script>
                            <div class="form-group">
                                <select multiple="multiple" name="street[]" style="display: none;">
                                </select>
                                <div class="ms-parent " style="width: 100%;"><button type="button"
                                        class="ms-choice"><span class="placeholder">Chọn Đường</span>
                                        <div class="fa fa-angle-down"></div>
                                    </button>
                                    <div class="ms-drop bottom">
                                        <ul style="max-height: 250px;">
                                            <li class="ms-no-results">No matches found</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <script>
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Đường",
                                // position: 'top',
                                // maxHeight: 400
                            });
                            </script>
                            <div class="form-group">
                                <select multiple="multiple" name="type[]" style="display: none;">
                                    <option value="1">Phòng trọ, nhà trọ</option>
                                    <option value="2">Nhà nguyên căn</option>
                                    <option value="3">Nhà mặt phố</option>
                                    <option value="4">Văn phòng</option>
                                    <option value="6">Chung cư, căn hộ</option>
                                    <option value="7">Mặt bằng, cửa hàng</option>
                                </select>
                                <div class="ms-parent " style="width: 100%;"><button type="button"
                                        class="ms-choice"><span class="placeholder">Chọn Loại Phòng</span>
                                        <div class="fa fa-angle-down"></div>
                                    </button>
                                    <div class="ms-drop bottom">
                                        <ul style="max-height: 250px;">
                                            <li class="multiple" style="width: 132px;"><label class=""><input
                                                        type="checkbox" data-name="selectItemtype[]"
                                                        value="1"><span>Phòng trọ, nhà trọ</span></label></li>
                                            <li class="multiple" style="width: 132px;"><label class=""><input
                                                        type="checkbox" data-name="selectItemtype[]" value="2"><span>Nhà
                                                        nguyên căn</span></label></li>
                                            <li class="multiple" style="width: 132px;"><label class=""><input
                                                        type="checkbox" data-name="selectItemtype[]" value="3"><span>Nhà
                                                        mặt phố</span></label></li>
                                            <li class="multiple" style="width: 132px;"><label class=""><input
                                                        type="checkbox" data-name="selectItemtype[]" value="4"><span>Văn
                                                        phòng</span></label></li>
                                            <li class="multiple" style="width: 132px;"><label class=""><input
                                                        type="checkbox" data-name="selectItemtype[]"
                                                        value="6"><span>Chung cư, căn hộ</span></label></li>
                                            <li class="multiple" style="width: 132px;"><label class=""><input
                                                        type="checkbox" data-name="selectItemtype[]" value="7"><span>Mặt
                                                        bằng, cửa hàng</span></label></li>
                                            <li class="ms-no-results">No matches found</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <script>
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Loại Phòng",
                                // position: 'top',
                                // maxHeight: 400
                            });
                            </script>
                            <div class="form-group price">
                                <div class="price-title">Chọn khoảng giá</div>
                                <div class="range-slider">
                                    <span class="irs js-irs-0"><span class="irs"><span class="irs-line"
                                                tabindex="-1"><span class="irs-line-left"></span><span
                                                    class="irs-line-mid"></span><span
                                                    class="irs-line-right"></span></span><span class="irs-min"
                                                style="display: none;">0</span><span class="irs-max"
                                                style="display: none;">1</span><span class="irs-from"
                                                style="display: none; left: 0%;">0</span><span class="irs-to"
                                                style="display: none; left: 0%;">0</span><span class="irs-single"
                                                style="display: none; left: 0%;">0</span></span><span
                                            class="irs-grid"></span><span class="irs-bar"
                                            style="left: 3.42679%; width: 93.1464%;"></span><span
                                            class="irs-shadow shadow-from" style="display: none;"></span><span
                                            class="irs-shadow shadow-to" style="display: none;"></span><span
                                            class="irs-slider from" style="left: 0%;"></span><span class="irs-slider to"
                                            style="left: 93.1464%;"></span></span><input type="text"
                                        class="js-range-slider irs-hidden-input" value="" readonly="">
                                </div>
                                <div class="extra-controls">
                                    <div class="form-group input-price">
                                        <div class="price-from">
                                            <div class="input-group">
                                                <input name="price_from" type="text" maxlength="4" value="0"
                                                    class="inp js-from form-control">
                                                <span class="input-group-addon">Triệu</span>
                                            </div>
                                        </div>
                                        <span class="input-price-title">Đến</span>
                                        <div class="price-to">
                                            <div class="input-group">
                                                <input name="price_to" type="text" maxlength="4" value="50"
                                                    class="inp js-to form-control">
                                                <span class="input-group-addon">Triệu</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <button type="submit" class="btn btn-slide-search"><span class="fa fa-search"></span>Tìm
                                    kiếm</button>
                            </div>

                            <script type="text/javascript">
                            var $range = $(".js-range-slider"),
                                $from = $(".js-from"),
                                $to = $(".js-to"),
                                range,
                                min = 0,
                                max = 50,
                                from,
                                to;

                            var updateValues = function() {
                                $from.prop("value", from);
                                $to.prop("value", to);
                            };

                            $range.ionRangeSlider({
                                type: "double",
                                min: min,
                                max: max,
                                step: 0.5,
                                prettify_enabled: false,
                                from: $from.val(),
                                to: $to.val(),
                                grid: false,
                                hide_min_max: true,
                                hide_from_to: true,
                                postfix: ' triệu đ',
                                prefix: "$",
                                keyboard: true,
                                grid_num: 10,
                                onChange: function(data) {
                                    from = data.from;
                                    to = data.to;

                                    updateValues();
                                }
                            });

                            range = $range.data("ionRangeSlider");

                            var updateRange = function() {
                                range.update({
                                    from: from,
                                    to: to
                                });
                            };

                            $from.on("change", function() {
                                from = +$(this).prop("value");
                                if (from < min) {
                                    from = min;
                                }
                                if (from > to) {
                                    from = to;
                                }

                                updateValues();
                                updateRange();
                            });

                            $to.on("change", function() {
                                to = +$(this).prop("value");
                                if (to > max) {
                                    to = max;
                                }
                                if (to < from) {
                                    to = from;
                                }

                                updateValues();
                                updateRange();
                            });
                            </script>
                        </form>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
            $(document).ready(function() {
                $('#submit_search').on('click', function() {
                    $('#search_form').submit();
                });
                $('.get_province').on('click', function(e) {
                    $('[name="district"]').attr('value', '');
                    $('#district-select').text('Chọn quận, huyện');
                    var key = $(this).val();
                    var table = 'district';
                    $.ajax({
                        url: 'http://phongtot.vn/data_client',
                        type: 'POST',
                        data: {
                            key: key,
                            table: table,
                            _token: 'mO1t5RbeC5jJ66OfNgeA6Cw5xViW5SFhQCaAu7oz'
                        },
                        dataType: 'json',
                        success: function(result) {
                            var html = '';
                            $.each(result, function(key, item) {
                                var value = item['id'];
                                var name = item['name'];
                                html += '<li class="get_district" value="' + value +
                                    '">' + name + '</li>';
                            });
                            $('#districtGroup').html(html);
                            // $('#districtGroup').append(html);
                            $('#wardGroup').html('');
                            $('[name="street[]"]').html('');
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Quận Huyện",
                                // position: 'top',
                                // maxHeight: 400
                            });
                        }
                    });
                });
                $('body').on('click', '.get_district', function(e) {
                    $('#wardGroup').html('');
                    $('[name="street[]"]').html('');
                    var key = $(this).val();
                    var table = 'ward';
                    $.ajax({
                        url: 'http://phongtot.vn/data_client',
                        type: 'POST',
                        data: {
                            key: key,
                            table: table,
                            _token: 'mO1t5RbeC5jJ66OfNgeA6Cw5xViW5SFhQCaAu7oz'
                        },
                        dataType: 'json',
                        success: function(result) {
                            var html = '';
                            $.each(result, function(key, item) {
                                var value = item['id'];
                                var name = item['name'];
                                html += '<option value="' + value + '">' + name +
                                    '</option>';
                            });
                            $('#wardGroup').html(html);
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn Phường Xã",
                                // position: 'top',
                                // maxHeight: 400
                            });
                        }
                    });
                    table = 'street';
                    $.ajax({
                        url: 'http://phongtot.vn/data_client',
                        type: 'POST',
                        data: {
                            key: key,
                            table: table,
                            _token: 'mO1t5RbeC5jJ66OfNgeA6Cw5xViW5SFhQCaAu7oz'
                        },
                        dataType: 'json',
                        success: function(result) {
                            var html = '';
                            $.each(result, function(key, item) {
                                var value = item['id'];
                                var name = item['name'];
                                html += '<option value="' + value + '">' + name +
                                    '</option>';
                            });
                            $('[name="street[]"]').html(html);
                            $("select").multipleSelect({
                                width: '100%',
                                multiple: true,
                                multipleWidth: 132,
                                selectAll: false,
                                placeholder: "Chọn đường/phố",
                                // position: 'top',
                                // maxHeight: 400
                            });
                        }
                    });
                });
            });
            </script>
            <div class="row">
                <div class="col-sm-6 col-md-12 sidebar-ads">
                    <img class="img-responsive" src="http://ngoaingu.net/themes/client/img/ads1.png" alt="" hidden=""
                        style="display: none !important;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-12 sidebar-social">
                    <div class="fb-page fb_iframe_widget"
                        data-href="https://www.facebook.com/Phongtotvn-Thu%C3%AA-V%C3%A0-Cho-Thu%C3%AA-Ph%C3%B2ng-Ch%C3%ADnh-Ch%E1%BB%A7-726759860760692/"
                        data-width="275" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true" data-show-posts="false"
                        fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=464576090336755&amp;container_width=275&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FPhongtotvn-Thu%25C3%25AA-V%25C3%25A0-Cho-Thu%25C3%25AA-Ph%25C3%25B2ng-Ch%25C3%25ADnh-Ch%25E1%25BB%25A7-726759860760692%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false&amp;width=275">
                        <span style="vertical-align: bottom; width: 0px; height: 0px;"><iframe name="f12235639265634"
                                width="275px" height="1000px" frameborder="0" allowtransparency="true"
                                allowfullscreen="true" scrolling="no" allow="encrypted-media"
                                title="fb:page Facebook Social Plugin"
                                src="https://web.facebook.com/v2.5/plugins/page.php?adapt_container_width=true&amp;app_id=464576090336755&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fd_vbiawPdxB.js%3Fversion%3D44%23cb%3Df232d28ab30ace%26domain%3Dphongtot.vn%26origin%3Dhttp%253A%252F%252Fphongtot.vn%252Ff1a8175cc3b3e7%26relation%3Dparent.parent&amp;container_width=275&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FPhongtotvn-Thu%25C3%25AA-V%25C3%25A0-Cho-Thu%25C3%25AA-Ph%25C3%25B2ng-Ch%25C3%25ADnh-Ch%25E1%25BB%25A7-726759860760692%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false&amp;width=275"
                                style="border: none; visibility: visible; width: 0px; height: 0px;"
                                class=""></iframe></span></div>
                </div>
            </div>
            <div class="row">
                <div style="margin-bottom: 30px;" class="col-sm-6 col-md-12 sidebar-ads">
                    <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/ads-3-min.png" alt="">
                </div>
                <div class="col-sm-6 col-md-12 sidebar-ads">
                    <img class="img-responsive" src="http://media.phongtot.vn/xc5tx4cj/ads-4-min.png" alt="">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 sidebar-article-label">
                    <div class="pull-left">
                        <a href="http://phongtot.vn/bai-viet">
                            <h3><span>bài viết</span> mới</h3>
                        </a>
                    </div>
                    <div class="pull-right">
                        <a href="http://phongtot.vn/bai-viet"></a>
                        <h3><a href="http://phongtot.vn/bai-viet">Xem thêm <i class="fa fa-angle-right"></i></a>
                        </h3>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/ngoi-nha-46m²-tuyet-dep-co-chi-phi-hoan-thien-480-trieu-dong-chang-trai-8x-xay-tang-vo_cover-573eddf84424b.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>Ngôi nhà 46m² tuyệt đẹp có chi phí hoàn thiện 480 triệu đồng chàng trai 8x xây
                                        tặng vợ</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/y-tuong-kinh-doanh-nha-tro-ngoi-khong-moi-thang-kiem-tram-trieu_cover-573dcbc3ac6e2.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>Ý tưởng kinh doanh nhà trọ, ngồi không mỗi tháng kiếm trăm triệu?</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/nhung-dieu-can-biet-khi-tim-phong-tro_cover-5714ad734268d.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>Những điều cần biết khi tìm phòng trọ</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/thiet-ke-can-ho-‪‬173m2-cuc-dep-voi-chi-phi-chi-17-trieu-dong_cover-57018c103e17a.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>Thiết kế căn hộ ‪‬173m2 cực đẹp với chi phí chỉ 17 triệu đồng</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/pham-huong-mac-gian-di-giao-luu-cung-sinh-vien_cover-57018a97e544c.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>Phạm Hương mặc giản dị giao lưu cùng sinh viên</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 sidebar-article-new">
                    <a href="http://phongtot.vn/bai-viet">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive"
                                    src="http://media.phongtot.vn/xc5tx4cj/vi-sao-chon-nganh-hot-van-that-nghiep_cover-57017e8c0162e.jpg"
                                    alt="">
                            </div>
                            <div class="col-md-7 no-padding-left">
                                <div class="sidebar-article-title">
                                    <h2>Vì sao chọn ngành 'hot' vẫn thất nghiệp?</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require("v_footer.php");
?>