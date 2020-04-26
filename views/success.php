<?php
    if(isset($_REQUEST['passwd']) && ($_REQUEST['passwd']!='')) {
        $password = $_REQUEST['passwd'];
        $retype = $_REQUEST['passretype'];
        $id = $_REQUEST['id'];
        $ok = $data->setpass($password,$retype,$id);
    } else {
        $ok=false;
    }
?>
<section class="ftco-intro img" id="hotel-section" >
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9 text-center">
        <?php if ($ok) { ?>
          <h2>Chào mừng bạn đến với các phần mềm quản lý của VELO</h2>
          <p>Vui lòng đăng nhập bằng email và mật khẩu của bạn để bắt đầu sử dụng phần mềm</p>
          <p class="mb-0"><a href="demo" class="btn btn-white px-4 py-3">Đăng nhập</a></p>
        <?php } else { ?>
          <h2>Đã có lỗi khi đặt mật khẩu cho tài khoản VELO của bạn!</h2>
          <p>Quý khách vui lòng liên hệ với bộ phận HỖ TRỢ KHÁCH HÀNG theo số điện thoại (024) 7777 8886 để được hỗ trợ</p>
          <p class="mb-0"><a href="https://zalo.me/0903260271" class="btn btn-white px-4 py-3">Hỗ trợ qua zalo</a></p>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
