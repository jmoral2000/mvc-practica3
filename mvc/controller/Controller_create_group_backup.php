<?php
include_once("model/Model_user.php");

class Controller_create_group {
    public $model;

    public function __construct()
	{
    	$this->model = new Model_user();
	}

    public function invoke()
    {
   	 if (!isset($_REQUEST['create']))
   	 {
   		 // web por defecto
   		 include 'view/form_create_group.php';
   	 }
   	 else
   	 {

   		 $this->model->create_user($_REQUEST['user'],$_REQUEST['group'],$_REQUEST['folder'],$_REQUEST['passw'],$_REQUEST['department']);
   		 include 'view/form_create_group.php';
        print_r($_REQUEST);
   	 }
    }
}
?>
