   <?php

    error_reporting(0);

    $conn= mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if(!$conn){

        die("Kết nối thất bại: " . mysqli_connect_error());

    }

    mysqli_set_charset($conn,'UTF8');

        ?>


        <?php

    if (isset($_POST['btngui'])) {

        $id='';

        $email1= $_POST['email1'];

        $ngay= date("Y-m-d");

        $sql= "INSERT INTO 1_dangki VALUES ('$id','defaulf','$email1','','','$ngay')";

        if(mysqli_query($conn,$sql))

        {

            echo "<script>alert('Cảm ơn bạn đã gửi thông tin, chúng tôi sẽ liên hệ lại trong thời gian sớm nhất!');</script>";

        }else{echo "<script>alert('Thất bại');</script>";}



    } 

 ?>
  <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>Giới thiệu</h3>
        					</div>
        					<p>Luôn mong muốn mang lại cho bạn những trải nghiệm và dịch vụ tốt nhất</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://thuonghieuweb.com" target="_blank">thuonghieuweb</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Gửi thư</h3>
        					</div>
        					<p>Hãy để lại email tôi sẽ liên hệ lại với bạn</p>
        					<div id="">
                                <form target="_blank" action="" method="POST" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="email1" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn" type="submit" name="btngui"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Liên hệ với tôi</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="<?php echo $thongtin['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="<?php echo $thongtin['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="<?php echo $thongtin['instagram']; ?>"><i class="fa fa-linkedin"></i></a></li>
        						<li><a href="<?php echo $thongtin['youtube']; ?>"><i class="fa fa-youtube-square"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="template/js/jquery-3.3.1.min.js"></script>
        <script src="template/js/popper.js"></script>
        <script src="template/js/bootstrap.min.js"></script>
        <script src="template/js/stellar.js"></script>
        <script src="template/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="template/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="template/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="template/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="template/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="template/vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="template/js/jquery.ajaxchimp.min.js"></script>
        <script src="template/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="template/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="template/js/mail-script.js"></script>
        <script src="template/js/theme.js"></script>

    </body>
</html>










