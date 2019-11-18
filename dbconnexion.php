<?php
 class Basesdedonnees{
     private $host='localhost';
     private $dbname='dsi21_g2_2019';
     private $user='root';
     private $pwd='';

  
  public $connexion=null;

public function  connecterDB(){
    try{
        $this->connexion=new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->pwd);
    }catch(PDOExecption $e){
        echo $e->getMessage();
    }

    return $this->connexion;
}
 }

?>