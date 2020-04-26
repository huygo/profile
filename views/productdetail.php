<?php
    $sanpham = $page['data'];
    $spnoibat = $data->spnoibat();
?>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 room-wrap">
        <div class="row">
          <div class="col-md-7 d-flex ftco-animate">
            <div class="img align-self-stretch" style="background-image: url(<?php echo $sanpham['hinh_anh'] ?>);"></div>
          </div>
          <div class="col-md-5 ftco-animate">
            <div class="text py-5">
              <h3><a href=""><?php echo $sanpham['name'] ?></a></h3>
              <p class="pos">Chỉ từ <span class="price"><?php echo $sanpham['gia_ban'] ?></span>/tháng</p>
              <p><?php echo $sanpham['mo_ta'] ?></p>
              <p><a href="tel:0903260271" class="btn btn-secondary">Điện thoại tư vấn</a> <a href="https://zalo.me/0903260271" class="btn btn-primary">Chat zalo</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <br>
        <h3 class="mb-5" style="border-bottom: 1px solid #f2f2f2;"><?php echo $sanpham['name'] ?></h3>
        <div class="noidung"><?php echo $sanpham['noi_dung'] ?></div>
      </div>
      <div class="col-lg-4 sidebar ftco-animate">
        <div class="sidebar-box ftco-animate">
          <h2 class="heading-sidebar">Sản phẩm nổi bật</h2>
          <?php
            foreach ($spnoibat AS $item)
              echo '
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('.$item['hinh_anh'].');"></a>
                <div class="text">
                  <h3 class="heading"><a href="product/'.$item['url'].'">'.$item['name'].'</a></h3>
                  <div class="meta">
                  </div>
                </div>
              </div>
              ';
          ?>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- <section class="ftco-section">
  <div class="container">
    <div class="row">


    </div>
  </div>
</section> -->
