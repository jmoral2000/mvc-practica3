<?php

include_once("model/Group.php");

class Model_group {
	public function create_group($group)
	{
		echo "entro en funcion create <br>";
		$usuario=new group($group);
		echo $group;
	//	echo "valores de usuario: ".$usuario->nom_user;
		passthru('sudo ./add_group.sh '.$usuario->group, $retorno);
#		passthru('sudo ./add_user.sh '.$usuario->nom_user.' '.$usuario->group, $retorno);
#		passthru('sudo ./change_password.sh '.$usuario->nom_user.' '.$usuario->passw, $retorno);
		echo "retorno de passthru: ".$retorno;

		return;
	}

	public function list_group()
	{
	 passthru("./list_group.sh");
	 $file = new SplFileObject("./group.txt");
	 // Loop until we reach the end of the file.
	 while (!$file->eof()) {
		 // Echo one line from the file.
		 $g=$file->fgets();
		 //$u1=explode("", $u);
		 $resultat_list[$g] = new group($g);
	 }
	 $file=null;
	 return $resultat_list;
	}
	public function delete_group($g)
	{
		$usuario=new group($g);
		echo $usuario->group;
	 passthru("./delgroup.sh ".$usuario->group, $retorno);
	 echo "retorno de passthru: ".$retorno;
	}
}





?>
