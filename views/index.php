<?php
    $banner = $data->getbanner(1);
    $bannerdeal = $data->getbanner(2);
    $homecate = $data->homecate(1);
    $homeprod = $data->homeprod(1);
    $homedeal = $data->homeprod(2);
    $homesale = $data->homeprod(3);
    $homepost = $data->homepost(1);
    $kinhnghiem = $data->kinhnghiem();
    $quatrinh1 = $data->quatrinh1();
    $quatrinh2 = $data->quatrinh2();
    $nhanxet = $data->nhanxet();
    $uudai = $data->uudai();
?>
 <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="container box_1620">
              <div class="banner_inner d-flex align-items-center">
          <div class="banner_content">
            <div class="media">
              <div class="d-flex">
                <img src="<?php echo $banner[0]['hinh_anh']; ?>" alt="">
              </div>
              <div class="media-body">
                <div class="personal_text">
                  <h6>Hello Everybody, i am</h6>
                  <h3><?php echo $banner[0]['name']; ?></h3>
                  <h4><?php echo $thongtin['chuc_danh']; ?></h4>
                  <p><?php echo $banner[0]['mo_ta']; ?></p>
                  <ul class="list basic_info">
                    <li><a href="#"><i class="lnr lnr-calendar-full"></i><?php echo date('jS F Y',strtotime($thongtin['ngay_sinh'])); ?></a></li>
                    <li><a href="tel:<?php echo $thongtin['dien_thoai']; ?>"><i class="lnr lnr-phone-handset"></i><?php echo $thongtin['dien_thoai']; ?></a></li>
                    <li><a href="mailto:<?php echo $thongtin['email']; ?>"><i class="lnr lnr-envelope"></i> <?php echo $thongtin['email']; ?></a></li>
                    <li><a href="#"><i class="lnr lnr-home"></i><?php echo $thongtin['dia_chi']; ?></a></li>
                  </ul>
                  <ul class="list personal_social">
                    <li><a href="<?php echo $thongtin['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $thongtin['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo $thongtin['instagram']; ?>"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
          <div class="container">
            <div class="row welcome_inner">
              <div class="col-lg-6">
                <div class="welcome_text">
                  <h4>Giới thiệu bản thân</h4>
                  <p><?php echo $thongtin['gioi_thieu']; ?></p>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="wel_item">
                        <i class="lnr lnr-database"></i>
                        <h4><?php echo $kinhnghiem['doanh_thu']; ?></h4>
                        <p>Doanh thu</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="wel_item">
                        <i class="lnr lnr-book"></i>
                        <h4><?php echo $kinhnghiem['du_an']; ?></h4>
                        <p>Dự án</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="wel_item">
                        <i class="lnr lnr-users"></i>
                        <h4><?php echo $kinhnghiem['khach_hang']; ?></h4>
                        <p>Khách hàng</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="tools_expert">
                  <div class="skill_main">
                <div class="skill_item">
                  <h4><?php echo $kinhnghiem['ex_1']; ?> <span class="counter"><?php echo $kinhnghiem['rate_1']; ?></span>%</h4>
                  <div class="progress_br">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $kinhnghiem['rate_1']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="skill_item">
                  <h4><?php echo $kinhnghiem['ex_2']; ?> <span class="counter"><?php echo $kinhnghiem['rate_2']; ?></span>%</h4>
                  <div class="progress_br">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $kinhnghiem['rate_2']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="skill_item">
                  <h4><?php echo $kinhnghiem['ex_3']; ?><span class="counter"><?php echo $kinhnghiem['rate_3']; ?></span>%</h4>
                  <div class="progress_br">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $kinhnghiem['rate_3']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="skill_item">
                  <h4><?php echo $kinhnghiem['ex_4']; ?> <span class="counter"><?php echo $kinhnghiem['rate_4']; ?></span>%</h4>
                  <div class="progress_br">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $kinhnghiem['rate_4']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="skill_item">
                  <h4><?php echo $kinhnghiem['ex_5']; ?> <span class="counter"><?php echo $kinhnghiem['rate_5']; ?></span>%</h4>
                  <div class="progress_br">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $kinhnghiem['rate_5']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Welcome Area =================-->
        
        <!--================My Tabs Area =================-->
        <section class="mytabs_area p_120">
          <div class="container">
            <div class="tabs_inner">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Experiences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Education</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <ul class="list">
                 <?php
          foreach ($quatrinh1 as $item) { ?>
                <li>
                  <span></span>
                  <div class="media">
                    <div class="d-flex">
                      <p><?php echo $item['thoi_gian']; ?></p>
                    </div>
                    <div class="media-body">
                      <h4><?php echo $item['name']; ?></h4>
                      <p><?php echo $item['mo_ta']; ?></p>
                    </div>
                  </div>
                </li>
              <?php } ?>
              </ul>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <ul class="list">
                     <?php
          foreach ($quatrinh2 as $qt) { ?>
                <li>
                  <span></span>
                  <div class="media">
                    <div class="d-flex">
                      <p><?php echo $qt['thoi_gian']; ?></p>
                    </div>
                    <div class="media-body">
                      <h4><?php echo $qt['name']; ?></h4>
                      <p><?php echo $qt['mo_ta']; ?></p>
                    </div>
                  </div>
                </li>
                 <?php } ?>
              </ul>
            </div>
          </div>
            </div>
          </div>
        </section>
        <!--================End My Tabs Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
          <div class="container">
            <div class="main_title">
              <h2>ưu đãi dành cho khách hàng</h2>
              <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
            </div>
            <div class="feature_inner row">
              <?php foreach ($uudai as $key => $ud) { ?>
              <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                   <i class="flaticon-city"></i>
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
        
        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_120">
          <div class="container">
            <div class="main_title">
              <h2>Dịch vụ và dự án</h2>
              <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="isotope_fillter">
              <ul class="gallery_filter list">
            <li class="active" data-filter="*"><a href="#">All</a></li>
            <li data-filter=".brand"><a href="#">Vector</a></li>
            <li data-filter=".manipul"><a href="#">Raster</a></li>
            <li data-filter=".creative"><a href="#">UI/UX</a></li>
            <li data-filter=".design"><a href="#">Printing</a></li>
          </ul>
            </div>
          </div>
          <div class="container">
            <div class="gallery_f_inner row imageGallery1">
              <div class="col-lg-4 col-md-4 col-sm-6 brand manipul design print">
                <div class="h_gallery_item">
                  <div class="g_img_item">
                    <img class="img-fluid" src="template/img/gallery/project-1.jpg" alt="">
                    <a class="light" href="template/img/gallery/project-1.jpg"><img src="template/img/gallery/icon.png" alt=""></a>
                  </div>
                  <div class="g_item_text">
                    <h4>3D Helmet Design</h4>
                    <p>Client Project</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 brand manipul creative">
                <div class="h_gallery_item">
                  <div class="g_img_item">
                    <img class="img-fluid" src="img/gallery/project-2.jpg" alt="">
                    <a class="light" href="img/gallery/project-2.jpg"><img src="img/gallery/icon.png" alt=""></a>
                  </div>
                  <div class="g_item_text">
                    <h4>2D Vinyl Design</h4>
                    <p>Client Project</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 manipul creative design print">
                <div class="h_gallery_item">
                  <div class="g_img_item">
                    <img class="img-fluid" src="img/gallery/project-3.jpg" alt="">
                    <a class="light" href="img/gallery/project-3.jpg"><img src="img/gallery/icon.png" alt=""></a>
                  </div>
                  <div class="g_item_text">
                    <h4>Creative Poster Design</h4>
                    <p>Client Project</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 brand creative print">
                <div class="h_gallery_item">
                  <div class="g_img_item">
                    <img class="img-fluid" src="img/gallery/project-4.jpg" alt="">
                    <a class="light" href="img/gallery/project-4.jpg"><img src="img/gallery/icon.png" alt=""></a>
                  </div>
                  <div class="g_item_text">
                    <h4>Embosed Logo Design</h4>
                    <p>Client Project</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 brand manipul design">
                <div class="h_gallery_item">
                  <div class="g_img_item">
                    <img class="img-fluid" src="img/gallery/project-5.jpg" alt="">
                    <a class="light" href="img/gallery/project-5.jpg"><img src="img/gallery/icon.png" alt=""></a>
                  </div>
                  <div class="g_item_text">
                    <h4>3D Disposable Bottle</h4>
                    <p>Client Project</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 brand creative">
                <div class="h_gallery_item">
                  <div class="g_img_item">
                    <img class="img-fluid" src="img/gallery/project-6.jpg" alt="">
                    <a class="light" href="img/gallery/project-6.jpg"><img src="img/gallery/icon.png" alt=""></a>
                  </div>
                  <div class="g_item_text">
                    <h4>3D Logo Design</h4>
                    <p>Client Project</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="more_btn">
              <a class="main_btn" href="#">Load More Items</a>
            </div>
          </div>
        </section>
        <!--================End Home Gallery Area =================-->
        
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
