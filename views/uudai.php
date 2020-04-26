<?php
    $nhanxet = $data->nhanxet();
    $uudai = $data->uudai1();
?>
<!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2>Ưu đãi dành cho khách hàng</h2>
							<div class="page_link">
								<a href="index.html">Trang chủ</a>
								<a href="services.html">Ưu đãi</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
          <div class="container">
            <div class="main_title">
              <h2>Những ưu đãi dành cho bạn</h2>
              <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
            </div>
            <div class="feature_inner row">
              <?php foreach ($uudai as $key => $ud) { ?>
              <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                   <i class="flaticon-sketch"></i>
                  <h4><?php echo $ud['name']; ?></h4>
                  <p><?php echo $ud['nhan_xet']; ?></p>
                </div>
              </div>
            <?php } ?>
              <!-- <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                  <i class="flaticon-skyline"></i>
                  <h4>Interior Design</h4>
                  <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                  <i class="flaticon-sketch"></i>
                  <h4>Concept Design</h4>
                  <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                </div>
              </div> -->
            </div>
          </div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
          <div class="container">
            <div class="main_title">
              <h2>Ý kiến của khách hàng</h2>
              <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
            </div>
            <div class="testi_inner">
          <div class="testi_slider owl-carousel">
              <?php
          foreach ($nhanxet as $nx) { ?>
            <div class="item">
              <div class="testi_item">
                <p><?php echo $nx['nhan_xet']; ?></p>
                <h4><?php echo $nx['name']; ?></h4>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star-half-o"></i></a>
              </div>
            </div>
          <?php }?>
          </div>
            </div>
          </div>
        </section>
        <!--================End Testimonials Area =================-->