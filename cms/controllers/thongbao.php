<?php
class thongbao extends controller {
    function __construct(){
        parent::__construct();
    }
	function index() {
		require('layouts/header.php');
		//echo ''
		$this->view->thongbao = 'Chức năng này chưa mở';
		$this->view->render('thongbao/index');
		require('layouts/footer.php');
	}

  function nomodule() {
    require('layouts/header.php');
    $this->view->thongbao = 'Không tìm thấy module';
    $this->view->render('thongbao/index');
    require('layouts/footer.php');
  }

  function nomethod() {
    require('layouts/header.php');
    $this->view->thongbao = 'Không tìm thấy method';
    $this->view->render('thongbao/index');
    require('layouts/footer.php');
  }


}
?>
