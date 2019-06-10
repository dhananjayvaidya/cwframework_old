<?php

class home extends Controller{
    function __construct() {
		parent::__construct();
    }
    function first(){
        if (@$_SESSION['uid']){
        		
			$this->view->title = "Dashboard | "._COMPANY_NAME_;
			$this->view->render("front/index/dashboard");
			
		}else{
			$this->view->title="Welcome to "._COMPANY_NAME_;
			$this->view->render("front/index/index");
			
		}
	}
}
?>