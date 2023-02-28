
<?php include('header.php');?>
<div class="recruitment">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                <?php for($i = 0 ; $i <= 10; $i++) :?>
                    <div class="col-md-4 col-lg-4 mb-3">
                        <div class="recruitment-item">
                            <a href="#" class="recruitment-item__link" title="">
                                <div class="recruitment-item__img hv_img">
                                    <img src="https://inbaobiducphat.vn/wp-content/uploads/2022/08/ke-hoach-tai-chinh-ca-nhan-01-300x169.jpg" alt="">
                                </div>
                                <div class="slug">
                                    <p class="recruitment-item__name">Tuyển dụng kế toán giá thành</p>
                                    <p class="recruitment-item__describe">Mô tả công việc: Tiếp nhận thông tin,đơn hàng từ bộ phận kinh doanh và chế bản để thực hiện báo giá Thực hiện nhập – xuất vật tư cho.Mô tả công việc: Tiếp nhận thông tin,đơn hàng từ bộ phận kinh doanh và chế bản để thực hiện báo giá Thực hiện nhập – xuất vật tư cho.</p>
                                </div>
                                <div class="day">
                                    <p class="day_number">24</p>
                                    <p class="month">Th8</p>
                                </div>
                            </a>
                             
                        </div>
                       
                    </div>
                    <?php endfor;?>
                </div>
            </div>
            <div class="col-lg-3">
                <?php include('block/component/sidebar-right.php');?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>