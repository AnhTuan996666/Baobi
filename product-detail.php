<?php include('header.php');?>
<div class="product-detail">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6 pb-3">
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
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">IN ẤN CÁC LOẠI </a></li>
                                <li class="breadcrumb-item active" aria-current="page">IN ẤN BAO BÌ, VỎ HỘP</li>
                            </ol>
                            <h3 class="product-detail__name">Hộp cứng</h3>
                        </nav>
                        <div class="slug">
                            <p>Danh mục: In ấn bao bì, vỏ hộp, In Ấn các loại</p>
                            <div class="footer footer-end_icon p-0 bg-white mt-3">
                                <a href="https://www.facebook.com/" title="" target="_blank" class="icon_footer"><i class="fa fa-facebook"></i></a>
                                <a href="#" title="" target="_blank" class="icon_footer icon_footer--instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" title="" target="_blank" class="icon_footer icon_footer--twitter"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/" title="" target="_blank" class="icon_footer icon_footer--pinterest"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#" title="" target="_blank" class="icon_footer icon_footer--linkedin"><i class="fa fa-linkedin-square" ></i></a>
                                <a href="#" title="" target="_blank" class="icon_footer icon_footer--youtube"><i class="fa fa-youtube-play" ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 p-0">
                <div class="pricing-box">
                    <h3 class="pricing-title">
                            Full Color Mockup
                    </h3>
                    <div class="pricing-price-1">
                        <span class="priceUnit currencysymwithd">VNĐ</span><span id="mockUpUnitPriceText" class="priceDigit">1.000 VNĐ</span><span class="price-tenure">/unit</span>
                    </div>
                    <div class="pricing-action">
                        <a class="btn-name btn btn-success btn-block btn-lg">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-4 p-0">
                <div class="pricing-box">
                    <h3 class="pricing-title">
                            Full Color Mockup
                    </h3>
                    <div class="pricing-price-1">
                        <span class="priceUnit currencysymwithd">VNĐ</span><span id="mockUpUnitPriceText" class="priceDigit">1.000 VNĐ</span><span class="price-tenure">/unit</span>
                    </div>
                    <div class="pricing-action">
                        <a class="btn btn-success btn-block btn-warning btn-lg">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-4 p-0">
                <div class="pricing-box">
                    <h3 class="pricing-title">
                            CUSTOM REQUEST
                    </h3>
                    <div class="pricing-price-1">
                        <span class="priceUnit currencysymwithd">VNĐ</span><span id="mockUpUnitPriceText" class="priceDigit">1.000 VNĐ</span><span class="price-tenure">/unit</span>
                    </div>
                    <div class="pricing-action">
                        <a class="btn-name btn btn-success btn-block btn-lg">Custom Request</a>
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