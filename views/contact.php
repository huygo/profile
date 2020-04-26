   <?php

    error_reporting(0);

    $conn= mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if(!$conn){

        die("Kết nối thất bại: " . mysqli_connect_error());

    }

    mysqli_set_charset($conn,'UTF8');

        ?>
  <?php

    if (isset($_POST['btnsend'])) {

        $id='';
        $name= $_POST['name'];

        $email= $_POST['email'];
        $noidung= $_POST['nd'];
        $tinnhan= $_POST['message'];
        $ngay= date("Y-m-d");

        $sql= "INSERT INTO 1_dangki VALUES ('$id',N'$name','$email',N'$noidung',N'$tinnhan','$ngay')";

        if(mysqli_query($conn,$sql))

        {

            echo "<script>alert('Cảm ơn bạn đã gửi thông tin, chúng tôi sẽ liên hệ lại trong thời gian sớm nhất!');</script>";

        }else{echo "<script>alert('Thất bại');</script>";}



    } 

 ?>
 <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2>Liên hệ với chúng tôi</h2>
							<div class="page_link">
								<a href="index.html">Trang chủ</a>
								<a href="contact.html">Liên hệ</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div class="mapBox">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.0859130033664!2d105.86366231540198!3d20.989192994502723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac1a22f105eb%3A0x5105c4650ab0cba7!2zODcgTMSpbmggTmFtLCBNYWkgxJDhu5luZywgSG_DoG5nIE1haSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1587831645488!5m2!1svi!2s" width="100%" height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6><?php echo $thongtin['dia_chi']; ?></h6>
                                <p>Santa monica bullevard</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="tel:<?php echo $thongtin['dien_thoai']; ?>"><?php echo $thongtin['dien_thoai']; ?></a></h6>
                                <p>Hoạt động 24/7</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="mailto:<?php echo $thongtin['email']; ?>"><?php echo $thongtin['email']; ?></a></h6>
                                <p>Gửi cho chúng tôi yêu cầu của bạn bất kì lúc nào!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="" method="post" id="contactForm">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên của bạn *" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Địa chỉ email của bạn *" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nd" name="nd" placeholder="Nội dung quan tâm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Lời nhắn"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn" name="btnsend">Gửi tin nhắn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
         <!-- contact js -->
        <script src="template/js/jquery.form.js"></script>
        <script src="template/js/jquery.validate.min.js"></script>
        <script src="template/js/contact.js"></script>
        <!--gmaps Js-->
       <!--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="template/js/gmaps.min.js"></script>
        <script src="template/js/theme.js"></script> -->