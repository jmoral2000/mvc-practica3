<?php

include_once("model/User.php");

class Model_user {
    public function create_user($username, $groupname, $folder, $passw)
    {
   	 $usuario=new User($username, $groupname, $folder, $passw);
   	 echo "Before passtrhu";
   	 print_r($usuario);
   	 passthru('sudo ./add_user.sh '.$usuario->username.' '.$usuario->groupname.' '.$usuario->folder.' '.$usuario->passw.' '.$usuario->department , $retorno);
   	 echo "retorno de passthru add_user: ".$retorno;
   	 return;
    }

    public function list_user()
    {
   	 passthru("./list_users.sh");
   	 $file = new SplFileObject("./users.txt");
   	 // Loop until we reach the end of the file.
   	 while (!$file->eof()) {
   		 // Echo one line from the file.
   		 $u=$file->fgets();
       print $u;
   		 //$u1=explode("", $u);
   		 $passw='';
   		 $resultat_list[$u] = new User($u, " ", " ", $passw);
   	 }
     $file=null;
   	 return $resultat_list;
    }
    public function delete_user($username)
    {
   	 $usuario=new User($username, '', '', '');
   	 passthru("./deluser.sh ".$usuario->username, $retorno);
   	 echo "retorno de passthru: ".$retorno;
    }
}

?>
