<?php
class temp extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        require 'layouts/header.php';
        $page                = isset($_REQUEST['p']) ? intval($_REQUEST['p']) : 1;
        $rows                = isset($_REQUEST['rows']) ? intval($_REQUEST['rows']) : 1000;
        $sort                = isset($_REQUEST['sort']) ? strval($_REQUEST['sort']) : 'id';
        $order               = isset($_REQUEST['order']) ? strval($_REQUEST['order']) : 'DESC';
        $offset              = ($page - 1) * $rows;
        $tukhoa              = isset($_REQUEST['tukhoa']) ? $_REQUEST['tukhoa'] : '';
        $danhmuc             = isset($_REQUEST['danhmuc']) ? $_REQUEST['danhmuc'] : '';
        $_SESSION['page']    = $page;
        $this->view->data    = $this->model->getFetObj($sort, $order, $offset, $rows,$tukhoa,$danhmuc);
        $this->view->sotrang = $this->model->sotrang($rows, $tukhoa);
        $this->view->danhmuc     = functions::dequy($this->model->getcate(),0,0);
        $this->view->render('temp/index');
        require 'layouts/footer.php';
    }

    function battat()
    {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
        $this->model->battat($id);
          header('Location: ' . CMS . '/temp');
    }

    function xoa()
    {
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
        $this->model->delObj($id);
        header('Location: ' . CMS . '/temp');
    }

    function edit()
    {
        require 'layouts/header.php';
        $id                      = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
        $this->view->data        = $this->model->getrow($id);
        if ($this->view->data['danh_muc']!='')
            $this->view->danhsach    = $this->model->getdanhsach($this->view->data['danh_muc']);
        else
            $this->view->danhsach    = array();
        $this->view->danhmuc     = functions::dequy($this->model->getcate(),0,0);
        $this->view->render('temp/edit');
        require 'layouts/footer.php';
    }

    function editsave()
    {
        $id      = $_REQUEST['id'];
        $name    = $_REQUEST['name'];
        $mota    = $_REQUEST['mota'];
        $danhmuc = isset($_REQUEST['danhsach'])?implode(',',$_REQUEST['danhsach']):'';
        if ($_REQUEST['url']=='')
           $url     = functions::convertname($name);
        else
           $url = $_REQUEST['url'];
        $niemyet = $_REQUEST['niemyet'];
        $giaban  = $_REQUEST['giaban'];
        $noidung   = $_REQUEST['compose'];
        $hinhanh   = $_REQUEST['hinhanh'];
        $tinhnang = $_REQUEST['tinhnang'];
        $vitri = $_REQUEST['vitri'];
        $luotxem = $_REQUEST['luotxem'];
        $masp = $_REQUEST['masp'];
        $slide0 = $_REQUEST['slide0'];
        $slide1 = $_REQUEST['slide1'];
        $slide2 = $_REQUEST['slide2'];
        $slide3 = $_REQUEST['slide3'];
        $data = array(
                    'name' => $name,
                    'mo_ta' => $mota,
                    'danh_muc' => $danhmuc,
                    'url' => $url,
                    'ma_sp' => $masp,
                    'gia_niem_yet' => $niemyet,
                    'gia_ban' => $giaban,
                    'noi_dung' => $noidung,
                    'hinh_anh' => $hinhanh,
                    'tinh_nang' => $tinhnang,
                    'com' => $vitri,
                    'luot_xem' => $luotxem,
                    'slide_0' => $slide0,
                    'slide_1' => $slide1,
                    'slide_2' => $slide2,
                    'slide_3' => $slide3
                );
        if ($this->model->updateObj($id, $data))
            $this->view->thongbao = 'Cập nhật thành công';
        else
            $this->view->thongbao = 'Cập nhật không thành công';
        require 'layouts/header.php';
        $this->view->module = 'temp';
        $this->view->render('index/thongbao');
        require 'layouts/footer.php';
    }

    function add()
    {
        require 'layouts/header.php';
        $this->view->danhmuc     = functions::dequy($this->model->getcate(),0,0);
        $this->view->render('temp/add');
        require 'layouts/footer.php';
    }

    function addsave()
    {
      $name    = $_REQUEST['name'];
      $mota    = $_REQUEST['mota'];
      $danhmuc = isset($_REQUEST['danhsach'])?implode(',',$_REQUEST['danhsach']):'';
      if ($_REQUEST['url']=='')
         $url     = functions::convertname($name);
      else
         $url = $_REQUEST['url'];
      $niemyet = $_REQUEST['niemyet'];
      $giaban  = $_REQUEST['giaban'];
      $noidung   = $_REQUEST['compose'];
      $hinhanh   = $_REQUEST['hinhanh'];
      $tinhnang = $_REQUEST['tinhnang'];
      $vitri = $_REQUEST['vitri'];
      $masp = $_REQUEST['masp'];
      $slide0 = $_REQUEST['slide0'];
      $slide1 = $_REQUEST['slide1'];
      $slide2 = $_REQUEST['slide2'];
      $slide3 = $_REQUEST['slide3'];
      $data = array(
                  'name' => $name,
                  'mo_ta' => $mota,
                  'danh_muc' => $danhmuc,
                  'url' => $url,
                  'ma_sp' => $masp,
                  'gia_niem_yet' => $niemyet,
                  'gia_ban' => $giaban,
                  'noi_dung' => $noidung,
                  'hinh_anh' => $hinhanh,
                  'tinh_nang' => $tinhnang,
                  'com' => $vitri,
                  'slide_0' => $slide0,
                  'slide_1' => $slide1,
                  'slide_2' => $slide2,
                  'slide_3' => $slide3,
                  'tinh_trang' => 1
              );
        if ($this->model->addObj($data))
            $this->view->thongbao = 'Cập nhật thành công';
        else
            $this->view->thongbao = 'Cập nhật không thành công';
        require 'layouts/header.php';
        $this->view->module = 'temp';
        $this->view->render('index/thongbao');
        require 'layouts/footer.php';
    }
}
?>
