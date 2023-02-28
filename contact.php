
<?php include('header.php');?>
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="contact-left">
                    <h2 class="contact_title mb-4 fw-bolder">LIên Hệ Với Chúng Tôi</h2>
                    <p class="fw-bolder mb-3">Thông tin công ty:</p>
                    <p class="fw-bolder mb-4">CÔNG TY CỔ PHẦN IN BAO BÌ ĐỨC PHÁT</p>
                    <p>Địa chỉ: 142 Phú Viên, Phường Bồ Đề, Quận Long Biên, Hà Nội.</p>
                    <p>Điện thoại:  <a href="tel:0981.84.69.89">0981.84.69.89</a></p>
                    <p>Email: inbaobiducphat@gmail.com</p>
                    <p class="mb-4">Website: https://inbaobiducphat.vn/</p>
                    <div class="from-item">
                        <p class="from-item__title"> Liên hệ với chúng tôi:</p>
                        <form class="row g-3">
                            <div class="col-12 col-md-4">
                                <label class="form-label">Họ</label>
                                <input type="text" name="fist" class="form-control" >
                                <span class="erron">Please enter an email address</span>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="form-label">Tên</label>
                                <input type="text" name="name" class="form-control">
                                <span class="erron">Please enter an email address</span>
                            </div>
                            <div class="col-12 col-4">
                                <label  class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" >
                                <span class="erron">Please enter an email address</span>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="inputAddress" class="form-label">Điện thoại</label>
                                <input type="text"  name="phone" class="form-control">
                                <span class="erron">Please enter an email address</span>
                            </div>
                            <div class="col-12 col-md-4">
                                <label class="form-label">Công ty</label>
                                <input type="text" name="company" class="form-control" >
                                <span class="erron">Please enter an email address</span>
                            </div>
                            <div class="col-12 col-md-4">
                                <label  class="form-label">Chủ đề</label>
                                <input type="text" name="company" class="form-control">
                                <span class="erron">Please enter an email address</span>
                            </div>
                            <div class="col-md-12">
                                <label  class="form-label">Nội dung</label>
                                <textarea class="form-control form-control--custom" placeholder="Leave a comment here" rows="4"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-submit">Gửi đi</button>
                            </div>
                            </form>
                    </div>
                    <div class="map py-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14883.330519877434!2d105.84077260000001!3d21.159057999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1677311451922!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <?php include('block/component/sidebar-right.php');?>
            </div>
    </div>
</div>
<?php include('footer.php');?>