<?php
class baiviet extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        require 'layouts/header.php';
        $page                = isset($_REQUEST['p']) ? intval($_REQUEST['p']) : 1;
        $rows                = isset($_POST['rows']) ? intval($_POST['rows']) : 20;
        $sort                = isset($_POST['sort']) ? strval($_POST['sort']) : 'id';
        $order               = isset($_POST['order']) ? strval($_POST['order']) : 'DESC';
        $offset              = ($page - 1) * $rows;
        $danhmuc             = isset($_REQUEST['danhmuc']) ? $_REQUEST['danhmuc'] : '';
        $tukhoa              = isset($_REQUEST['tukhoa']) ? $_REQUEST['tukhoa'] : '';
        $this->view->data    = $this->model->getFetObj($sort, $order, $offset, $rows,$tukhoa,$danhmuc);
        $this->view->sotrang = $this->model->sotrang($rows, $tukhoa);
        $this->view->danhmuc     = functions::dequy($this->model->danhmuc(),0,0);
        $_SESSION['page']    = $page;
        $this->view->render('baiviet/index');
        require 'layouts/footer.php';
    }

    function edit()
    {
        require 'layouts/header.php';
        $id               = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
        $this->view->data = $this->model->getrow($id);
        if ($this->view->data['blog']!='')
            $this->view->danhsach    = $this->model->getdanhsach($this->view->data['blog']);
        else
            $this->view->danhsach    = array();
        $this->view->danhmuc     = functions::dequy($this->model->danhmuc(),0,0);
        $this->view->render('baiviet/edit');
        require 'layouts/footer.php';
    }

    function editsave()
    {
        $id      = $_REQUEST['id'];
        $name    = $_REQUEST['name'];
        $mota    = $_REQUEST['mota'];
        $url = $_REQUEST['url'];
        $com = $_REQUEST['com'];
        $luotxem = $_REQUEST['luotxem'];
        $danhmuc = isset($_REQUEST['danhsach'])?implode(',',$_REQUEST['danhsach']):'';
        $noidung = $_REQUEST['compose'];
        $hinhanh    = $_REQUEST['hinhanh'];
        $ngaysua = date("Y-m-d",strtotime($_REQUEST['ngay']));
        $data = array(
           'name' => $name,
           'url' => $url,
           'mo_ta' => $mota,
           'blog' => $danhmuc,
           'com' => $com,
           'luot_xem' => $luotxem,
           'ngay_cap_nhat' => $ngaysua,
           'noi_dung' => $noidung,
           'hinh_anh' => $hinhanh
        );
        if ($this->model->updateObj($id, $data))
            $this->view->thongbao = 'Cập nhật thành công';
        else
            $this->view->thongbao = 'Cập nhật không thành công';
        require 'layouts/header.php';
        $this->view->module = 'baiviet';
        $this->view->render('index/thongbao');
        require 'layouts/footer.php';
    }

    function add()
    {
        require 'layouts/header.php';
        if ($this->view->data['blog']!='')
            $this->view->danhsach    = $this->model->getdanhsach($this->view->data['blog']);
        else
            $this->view->danhsach    = array();
        $this->view->danhmuc     = functions::dequy($this->model->danhmuc(),0,0);
        $this->view->render('baiviet/add');
        require 'layouts/footer.php';
    }

    function addsave()
    {
        $name    = $_REQUEST['name'];
        $mota    = $_REQUEST['mota'];
        if ($_REQUEST['url']=='')
           $url     = functions::convertname($name);
        else
           $url = $_REQUEST['url'];
        $danhmuc = isset($_REQUEST['danhsach'])?implode(',',$_REQUEST['danhsach']):'';
        $com = $_REQUEST['com'];
        $noidung = $_REQUEST['compose'];
        $hinhanh    = ($_REQUEST['hinhanh']=='')?'http://via.placeholder.com/360x225':$_REQUEST['hinhanh'];
        $ngaysua = date("Y-m-d",strtotime($_REQUEST['ngay']));
        $data = array(
           'name' => $name,
           'url' => $url,
           'mo_ta' => $mota,
           'blog' => $danhmuc,
           'ngay_cap_nhat' => $ngaysua,
           'noi_dung' => $noidung,
           'hinh_anh' => $hinhanh,
           'com' => $com,
           'tinh_trang' => 1
        );
        if ($this->model->addObj($data))
            $this->view->thongbao = 'Cập nhật thành công';
        else
            $this->view->thongbao = 'Cập nhật không thành công';
        require 'layouts/header.php';
        $this->view->module = 'baiviet';
        $this->view->render('index/thongbao');
        require 'layouts/footer.php';
    }

    function battat()
    {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
        $this->model->battat($id);
        header('Location: ' . CMS . '/baiviet');
    }

    function xoa()
    {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
        $this->model->delObj($id);
        header('Location: ' . CMS . '/baiviet');
    }
}
?>
