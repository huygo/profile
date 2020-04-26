<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
  <div class="container">
		<?php
				$khachhang = $data->khachhang($_GET['otp']);
				if (sizeof($khachhang)==1) {
		?>
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4">Xác nhận đăng ký tài khoản</h2>
        <p>Quý khách đã đăng ký thành công tài khoản VELO. <br>
					 Vui lòng đặt mật khẩu để bảo mật tài khoản. Không chia sẻ mật khẩu để tránh bị mất mát dữ liệu!
				 </p>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-7 order-md-last d-flex">
        <form action="success" class="bg-light p-4   contact-form" method="post">
          <div class="form-group">
						<h3 class="mb-3">Đặt mật khẩu</h3>
						Tên đăng nhập
            <input type="text" class="form-control" value="<?php echo $khachhang[0]['email']?>" readonly>
						<input type="hidden" value="<?php echo $khachhang[0]['id']?>" name="id">
          </div>
          <div class="form-group">
						Mật khẩu
            <input type="password" class="form-control" placeholder="8 ký tự viết liền không dấu" name="passwd">
          </div>
          <div class="form-group">
						Xác nhận mật khẩu
            <input type="password" class="form-control" placeholder="Phải trùng khớp với mật khẩu ở trên" name="passretype">
          </div>
          <div class="form-group">
            <input type="submit" value="OK" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>

      <div class="col-md-5 d-flex">
        <div class="row d-flex contact-info mb-5" >
          <div class="col-md-12 ftco-animate" >
            <div class="box p-2 px-3 bg-light d-flex">
              <div class="icon mr-3">
                <span class="icon-map-signs"></span>
              </div>
              <div>
                <h3 class="mb-3">HỖ TRỢ KỸ THUẬT</h3>
                <p>Nếu bạn gặp khó khăn khi đăng ký, vui lòng liên hệ số điện thoại hỗ trợ hoặc email bên dưới</p>
              </div>
            </div>
          </div>
          <div class="col-md-12 ftco-animate">
            <div class="box p-2 px-3 bg-light d-flex">
              <div class="icon mr-3">
                <span class="icon-phone2"></span>
              </div>
              <div>
                <h3 class="mb-3">Số điện thoại cố định</h3>
                <p><a href="tel://02477778666">(024) 7777 8666</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-12 ftco-animate">
            <div class="box p-2 px-3 bg-light d-flex">
              <div class="icon mr-3">
                <span class="icon-paper-plane"></span>
              </div>
              <div>
                <h3 class="mb-3">Email Address</h3>
                <p><a href="mailto:info@velo.vn">info@velo.vn</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-12 ftco-animate">
            <div class="box p-2 px-3 bg-light d-flex">
              <div class="icon mr-3">
                <span class="icon-globe"></span>
              </div>
              <div>
                <h3 class="mb-3">Website</h3>
                <p><a href="https://velo.vn">https://velo.vn</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php } else { ?>
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2 class="mb-4">Mã OTP đăng ký tài khoản đã hết hạn</h2>
				<p>Rất tiếc, mã OTP quý khách dùng để đăng ký tài khoản đã hết hạn</p>
				<p>Quý khách vui lòng liên hệ với bộ phận HỖ TRỢ KHÁCH HÀNG theo số điện thoại (024) 7777 8886 để được hỗ trợ</p>
				<p class="mb-0"><a href="https://zalo.me/0903260271" class="btn btn-primary px-4 py-3">Hỗ trợ qua zalo</a></p>
			</div>
		</div>
	<?php } ?>
  </div>
</section>
