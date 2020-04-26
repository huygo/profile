<?php
class index extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        require 'layouts/header.php';
        $this->view->render('index/index');
        require 'layouts/footer.php';
    }

    function doimatkhau()
    {
        require 'layouts/header.php';
        $this->view->render('index/doimatkhau');
        require 'layouts/footer.php';
    }
    function changepass()
    {
        $oldpass = md5(md5($_REQUEST['oldpass']));
        $newpass = md5(md5($_REQUEST['newpass']));
        $userid  = $_SESSION['user']['id'];
        if ($this->model->checkold($userid, $oldpass))
            if ($this->model->changepass($userid, $newpass))
                $this->view->thongbao = "Đổi mật khẩu thành công, ghi nhớ mật khẩu mới cho lần đăng nhập sau!";
            else
                $this->view->thongbao = "Đổi mật khẩu không thành công, vui lòng thử lại!";
        else
            $this->view->thongbao = "Mật khẩu cũ không đúng, vui lòng thử lại!";
        require 'layouts/header.php';
        $this->view->render('thongbao/index');
        require 'layouts/footer.php';
    }

    function logout()
    {
        session_start();
        session_destroy();
        header('Location: ' . CMS);
        exit;
    }
}
?>
