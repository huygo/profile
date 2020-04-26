<?php
if (isset($_REQUEST['dienthoai']) && ($_REQUEST['dienthoai']!='') && strlen($_REQUEST['dienthoai'])>9 && strlen($_REQUEST['dienthoai'])<12 &&is_numeric ($_REQUEST['dienthoai'])) {
      $hoten = $_REQUEST['hoten'];
      $combo = $_REQUEST['combo'];
      $soluong = $_REQUEST['soluong'];
      $dienthoai = $_REQUEST['dienthoai'];
      $diachi = $_REQUEST['diachi'];
      $otp = strtoupper(bin2hex(openssl_random_pseudo_bytes(3)));
      $ok = $data->sendmail($hoten,$combo, $soluong, $dienthoai,$diachi,$otp);
      // $ok = true;
} else {
    $ok=false;
}
?>

<!--================About Area Start =================-->
<section class="bg-gray section-padding magic-ball magic-ball-about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
        <div class="about-img">
          <img class="img-fluid" src="img/home/cong-dung-cua-thach-giam-can-fudi.png" alt="">
        </div>
      </div>
      <div class="col-lg-5 col-md-6 align-self-center about-content">
        <?php if ($ok) { ?>
        <h2>Cảm ơn bạn đã đặt hàng tại website của chúng tôi!</h2>
        <p>Mã đơn hàng của quý khách là <span style="color:red"><?php echo $otp ?></span>. Trong quá trình xử lý đơn hàng, nhân viên tư vấn sẽ gọi điện để xác minh thông tin, quý khách vui lòng chờ nghe điện thoại. Trân trọng!</p>
        <?php } else { ?>
          <h1>Đặt hàng không thành công!</h1>
          <p>Quý khách vui lòng liên hệ với bộ phận HỖ TRỢ KHÁCH HÀNG theo số điện thoại (024) 7777 8886 để được hỗ trợ đặt hàng trực tiếp!</p>
        <?php } ?>
        <a class="button" href="https://zalo.me/0986826529">Tư vấn zalo</a>
      </div>
    </div>
  </div>
</section>
