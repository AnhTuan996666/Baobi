<?php include('header.php');?>
<div class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 pb-3">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 slideProduct2">
                        <div class="swiper-wrapper">
                        <?php for($i = 0; $i <= 10; $i++) :?>
                            <div class="swiper-slide">
                            <a href="https://znews-photo.zingcdn.me/w660/Uploaded/kbd_bcvi/2019_11_23/5d828d976f24eb1a752053b5.jpg" data-fancybox="gallery" class="fancybox"> 
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
        <div class="col-12 col-lg-6">
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
    </div>
</div>
<?php include('footer.php');?>