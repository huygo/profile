<?php
if (isset($_REQUEST['vemail']) && filter_var($_REQUEST['vemail'], FILTER_VALIDATE_EMAIL)) {
      $email = $_REQUEST['vemail'];
      $hoten = $_REQUEST['name'];
      $dienthoai = $_REQUEST['phone'];
      $yeucau = $_REQUEST['noidung'];
      $ok = $data->savemail($hoten,$dienthoai,$email,$yeucau);
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
          <h2>Cảm quý khách đã gửi yêu cầu cho chúng tôi</h2>
          <p>Nhân viên tư vấn của chúng tôi sẽ liên hệ lại với quý khách qua email hoặc điện thoại trong vòng 24 giờ tới.</p>
          <p class="mb-0"><a href="<?php echo HOME ?>" class="btn btn-white px-4 py-3">Quay lại trang chủ</a></p>
        <?php } else { ?>
          <h2>Bạn cần cung cấp địa chỉ email và số điện thoại hợp lệ!</h2>
          <p>Trường hợp khẩn cấp, vui lòng liên hệ với bộ phận HỖ TRỢ KHÁCH HÀNG theo số điện thoại (024) 7777 8886 để được hỗ trợ trực tiếp!</p>
          <p class="mb-0"><a href="https://zalo.me/0903260271" class="btn btn-white px-4 py-3">Hỗ trợ qua zalo</a></p>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
