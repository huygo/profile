<?php
class menu extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        require 'layouts/header.php';
        $this->view->data = $this->model->getFetObj(); 
        $this->view->render('menu/index');
        require 'layouts/footer.php';
    }

    function edit()
    {
        require 'layouts/header.php';
        $id                 = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
        $this->view->data   = $this->model->getrow($id);
        $menu               = $this->model->getmenu($id);
        $this->view->menu   = functions::dequy($menu, 0, 0);
        $this->view->select = $this->model->select($this->view->data['phan_loai']);
        $this->view->render('menu/edit');
        require 'layouts/footer.php';
    }

    function editsave()
    {
        $id   = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $cha  = $_REQUEST['cha'];
        $loai = $_REQUEST['kieu'];
        if ($loai == 5)
            $url = $_REQUEST['url'];
        else
            $url = $_REQUEST['selection'];
        $thutu = $_REQUEST['thutu'];
        $data  = array(
            'name' => $name,
            'url' => $url,
            'phan_loai' => $loai,
            'cha' => $cha,
            'thu_tu' => $thutu
        );
        if ($this->model->updateObj($id, $data))
            $this->view->thongbao = 'Cập nhật thành công';
        else
            $this->view->thongbao = 'Cập nhật không thành công';
        require 'layouts/header.php';
        $this->view->module = 'menu';
        $this->view->render('index/thongbao');
        require 'layouts/footer.php';
    }

    function add()
    {
        require 'layouts/header.php';
        $menu = $this->model->getmenu(0);
        $this->view->menu   = functions::dequy($menu, 0, 0);
        $this->view->select = $this->model->select(1);
        $this->view->render('menu/add');
        require 'layouts/footer.php';
    }

    function addsave()
    {
        $name = $_REQUEST['name'];
        $cha  = $_REQUEST['cha'];
        $loai = $_REQUEST['kieu'];
        if ($loai == 5)
            $url = $_REQUEST['url'];
        else
            $url = $_REQUEST['selection'];
        $thutu = $_REQUEST['thutu'];
        $data  = array(
            'name' => $name,
            'url' => $url,
            'phan_loai' => $loai,
            'cha' => $cha,
            'thu_tu' => $thutu,
            'tinh_trang' => 1
        );
        if ($this->model->addObj($data))
            $this->view->thongbao = 'Cập nhật thành công';
        else
            $this->view->thongbao = 'Cập nhật không thành công';
        require 'layouts/header.php';
        $this->view->module = 'menu';
        $this->view->render('index/thongbao');
        require 'layouts/footer.php';
    }

    function battat()
    {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
        $this->model->battat($id);
        header('Location: ' . CMS . '/menu');
    }

    function del()
    {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
        $this->model->delObj($id);
        header('Location: ' . CMS . '/menu');
    }

    function select()  // su dung cho selection cua add và edit
    {
        $loai   = $_REQUEST['option'];
        $option = $this->model->select($loai);
        echo (json_encode($option));
    }
}
?>
