<?php include('header.php');?>
<div class="product-detail">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6 pb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">IN ẤN CÁC LOẠI </a></li>
                        <li class="breadcrumb-item active" aria-current="page">IN ẤN BAO BÌ, VỎ HỘP</li>
                    </ol>
                </nav>
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 slideProduct2">
                    <div class="swiper-wrapper">
                        <?php for($i = 0; $i <= 10; $i++) :?>
                            <div class="swiper-slide">
                                <a href="https://znews-photo.zingcdn.me/w660/Uploaded/kbd_bcvi/2019_11_23/5d828d976f24eb1a752053b5.jpg" data-fancybox="gallery" class="fancybox icon-zoom"> 
                                    <img src="https://znews-photo.zingcdn.me/w660/Uploaded/kbd_bcvi/2019_11_23/5d828d976f24eb1a752053b5.jpg" />
                                </a>
                            </div>
                        <?php endfor; ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper slideProduct mt-3">
                    <div class="swiper-wrapper">
                    <?php for($i = 0; $i <= 10; $i++) :?>
                        <div class="swiper-slide">
                                <img src="https://znews-photo.zingcdn.me/w660/Uploaded/kbd_bcvi/2019_11_23/5d828d976f24eb1a752053b5.jpg" />
                        </div>
                    <?php endfor; ?>
                </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <div class="product-detail-right">
                    <div class="item">
                            <p class="text-center title">Thông số sản phẩm</p>
                            <div class="table-specifications align-items-center">
                                <p class="specifications-title">Mã sản phẩm</p>
                                <p class="specifications-txt">TD#</p>
                            </div>
                            <div class="table-specifications align-items-center">
                                <p class="specifications-title">Kích thước</p>
                                <p class="specifications-txt">TD#</p>
                            </div>
                            <div class="table-specifications align-items-center">
                                <p class="specifications-title">Chất liệu giấy</p>
                                <p class="specifications-txt">TD#</p>
                            </div>
                            <div class="table-specifications align-items-center">
                                <p class="specifications-title">Công nghệ in</p>
                                <p class="specifications-txt">TD#</p>
                            </div>
                            <div class="table-specifications align-items-center">
                                <p class="specifications-title">Màng cán</p>
                                <p class="specifications-txt">TD#</p>
                            </div>
                            <div class="table-specifications align-items-center">
                                <p class="specifications-title">Ép nhũ</p>
                                <p class="specifications-txt">TD#</p>
                            </div>
                            <div class="table-specifications align-items-center">
                                <p class="specifications-title">Phủ bóng UV</p>
                                <p class="specifications-txt">TD#</p>
                            </div>
                            <div class="table-specifications align-items-center">
                                <p class="specifications-title">Thúc nổi họa tiết</p>
                                <p class="specifications-txt">TD#</p>
                            </div>
                            <div class="table-specifications align-items-center">
                                <p class="specifications-title">Số lượng</p>
                                <p class="specifications-txt">TD#</p>
                            </div>
                            <div class="table-specifications align-items-center">
                                <p class="specifications-title">Đơn giá</p>
                                <p class="specifications-txt">TD#</p>
                            </div>
                            <div class="table-specifications align-items-center">
                                <p class="specifications-title">Mã sản phẩm</p>
                                <p class="specifications-txt">TD#</p>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h3 class="fw-bold">CHI TIẾT SẢN PHẨM</h3>
                    <div class="product-detail-slug">
                        <div class="s-content py-3 text-justify">
                        Không khí mùa này thấy vui ghê!
Thay phiên đám cưới thấy mà mê!
Mai mốt vào mùa mưa khỏi lạnh
Sang năm con cháu có đầy đàn!
Còn dăm bữa nữa tới ngày vui
(Tên cô dâu, chú rể) nên đôi kết vợ chồng
Chúc cho lửa mặn hương nồng!
Răng long đầu bạc vẫn còn có nhau.
Ngày xưa hai chữ làm quen

                        </div>
                    </div>
                </div>
            </div>
            <div class="product-similar p-0 mt-4">
                <h3 class="product-similar__title text-center">SẢN PHẨM TƯƠNG TỰ</h3>
                <div class="container">
                    <div class="swiper mySwiper productSimilarSlide">
                        <div class="swiper-wrapper">
                            <?php for($i = 0 ; $i <= 10; $i++) :?>
                                <div class="swiper-slide">
                                    <div class="product-left-item">
                                        <div class="product-left-image position-relative">
                                            <div class="item">
                                                <a href="#" class="product-item-image__links" title="">
                                                <img  alt="" src="theme/frontend/images/tui-giay-4-600x600.jpg"/>
                                                </a>
                                                </div>
                                            <div class="item item-hover">
                                                <a href="#" class="product-item-image__links" title="">
                                                <img  alt="" src="theme/frontend/images/hop-cung-9-600x600.jpg"/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-left-slug">
                                            <div class="item text-center">
                                                <a href="#" class="product-item-image" title="">Túi giấy</a>
                                                <p class="product-item-cat">In Ấn các loại</p>
                                            </div>
                                            <p  class="product-item-money"><span class="product-item-money__sale">60.000₫</span> 19.000₫</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <div class="btn-silde">
                            <div class="product-similar-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                            <div class="product-similar-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>