<?php
class dashboard extends controller{
    function __construct(){
        parent::__construct();
    }
    
    function index(){
		require('layouts/header.php');
		$this->view->saletotal = $this->model->getTotal();
		$this->view->sale = $this->model->getSale();		
		$this->view->render('dashboard/index');
		require('layouts/footer.php');
    }
}
?>