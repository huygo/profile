 <?php
$banner = $data->getbanner(1);
 $kinhnghiem = $data->kinhnghiem();
 $nhanxet = $data->nhanxet();
 ?>
 <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2>Về chúng tôi</h2>
							<div class="page_link">
								<a href="index.html">Trang chủ</a>
								<a href="about-us.html">Giới thiệu</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        
        <!--================Home Banner Area =================-->
        <section class="profile_area">
           	<div class="container">
           		<div class="profile_inner p_120">
					<div class="row">
						<div class="col-lg-5">
							<img class="img-fluid" src="<?php echo $banner[1]['hinh_anh']; ?>" alt="">
						</div>
						<div class="col-lg-7">
							<div class="personal_text">
								<h6>Hello Everybody, i am</h6>
								<h3><?php echo $banner[0]['name']; ?></h3>
								<h4><?php echo $thongtin['chuc_danh']; ?></h4>
								<p><?php echo $banner[0]['mo_ta']; ?></p>
								<ul class="list basic_info">
									<li><a href="#"><i class="lnr lnr-calendar-full"></i><?php echo date('jS F Y',strtotime($thongtin['ngay_sinh'])); ?></a></li>
									<li><a href="tel:<?php echo $thongtin['dien_thoai']; ?>"><i class="lnr lnr-phone-handset"></i><?php echo $thongtin['dien_thoai']; ?></a></li>
									<li><a href="mailto:<?php echo $thongtin['email']; ?>"><i class="lnr lnr-envelope"></i><?php echo $thongtin['email']; ?></a></li>
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
									<h4><?php echo $kinhnghiem['ex_3']; ?> <span class="counter"><?php echo $kinhnghiem['rate_3']; ?></span>%</h4>
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