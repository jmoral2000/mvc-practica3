<?php
class Controller {
	function invoke() {


		 if (!isset($_REQUEST['option'])) {
			 include "view/main_page.php";
			 print_r($_REQUEST);
    }else{
			switch ($_REQUEST['option']) {
    case "create_user":
			echo "crear usuario";
			include "Controller_create_user.php";
			$controller= new controller_create_user();
			$controller->invoke();
			break;
    case "list_user":
			echo "listar usuario";
			include "Controller_list_user.php";
			$controller= new controller_list_user();
			$controller->invoke();
			break;
    case "create_group":
			echo "crear grupo";
			include "Controller_create_group.php";
			$controller= new controller_create_group();
			$controller->invoke();
			break;
  	case "list_groups":
			echo "listar grupo";
			include "Controller_list_groups.php";
			$controller= new controller_list_groups();
			$controller->invoke();
			break;
		}



  }
	}
}


?>
