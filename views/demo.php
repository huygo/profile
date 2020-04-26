<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="row block-9">
        <?php
            if(session_status() !== PHP_SESSION_ACTIVE) session_start();
            $sid = md5($_SERVER['HTTP_HOST'].'demo'.session_id());
            if(isset($_SESSION[$sid])) {
              echo '<form class="bg-light p-4   contact-form"><h2 class="mb-4">Bạn đã đăng nhập tài khoản VELO</h2><h3>Hãy chọn một trong các ứng dụng dưới đây để chạy thử</h3>';
              echo '<div class="form-group">
                <a href="banhang" class="btn btn-primary py-3 px-5">Phần mềm bán hàng</a>
                <a href="chamcong" class="btn btn-primary py-3 px-5">Phần mềm chấm công</a>
                <a href="vpdt" class="btn btn-primary py-3 px-5">Phần mềm VPDT</a>
              </div></form>';
            } else {
                if (isset($_REQUEST['email']) && filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
                    $password = md5(md5($_REQUEST['passwd']));
                    $user = $data->user($_REQUEST['email'],$password);
                    if (sizeof($user)==1) {
                        $_SESSION[$sid]=true;
                        $_SESSION['user']=$user[0];
                        echo ('<form class="bg-light p-4   contact-form"><h2 class="mb-4">Bạn đã đăng nhập thành công tài khoản VELO</h2>');
                        echo '<p>Hãy chọn một trong các ứng dụng dưới đây để chạy thử</p>';
                        echo '<div class="form-group">
                          <a href="banhang" class="btn btn-primary py-3 px-5">Phần mềm bán hàng</a>
                          <a href="chamcong" class="btn btn-primary py-3 px-5">Phần mềm chấm công</a>
                          <a href="vpdt" class="btn btn-primary py-3 px-5">Phần mềm VPDT</a>
                        </div></form>';
                    } else {
                      echo '
                          <form action="" class="bg-light p-4   contact-form" method="post">
                            <h2 class="mb-4">Đăng nhập tài khoản</h2>
                            <h3 class="mb-4" style="color:red">Email hoặc mật khẩu không hợp lệ</h3>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Email của bạn" name="email">
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control" name="passwd" placeholder="Mật khẩu của bạn">
                            </div>
                            <div class="form-group">
                              <input type="submit" value="OK" class="btn btn-primary py-3 px-5">
                            </div>
                          </form>
                      ';
                    }
                } else {
                  echo '<h2 class="mb-4">Đăng nhập tài khoản</h2>';
                  echo '
                      <form action="" class="bg-light p-4   contact-form" method="post">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Email của bạn" name="email">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" name="passwd" placeholder="Mật khẩu của bạn">
                        </div>
                        <div class="form-group">
                          <input type="submit" value="OK" class="btn btn-primary py-3 px-5">
                        </div>
                      </form>
                  ';
                }
            }
        ?>
      </div>
    </div>
  </div>
</section>
