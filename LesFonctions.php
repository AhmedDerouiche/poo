<?php
require 'dbconnexion.php';
    class fonctions  
    {
        private $cnx;
         public function __construct()
         {
            $db = new basesdedonnees;
            $this->cnx = $db->connecterDB();
         }
         public function readalletudiants()
         {
             try {
                 $req = 'SELECT * FROM students';
                 $result= $this->cnx->prepare($req);
                 $result->execute();
                 return $result;
             } catch (Exception $e) {
                 echo $e->getMessage();
             }
         }
         public function readunetudiant()
         {
             try {
                $req=$this->cnx->prepare('SELECT * FROM students where id= :param_id');
                $req->bindParam(':param_id',$_GET['id']);
                $req->execute();
                return $req;
             } catch (Exeption $e) {
                 echo $e->getMessage();
             }
         }
         public function createtudiant()
         {
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            
            $req=$this->cnx->prepare("INSERT INTO students VALUES (null, :firstname , :lastname , :email , :phone)");
            
            $req->bindParam(':firstname',$firstname);
            $req->bindParam(':lastname',$lastname);
            $req->bindParam(':email',$email);
            $req->bindParam(':phone',$phone);
            
            $req->execute();
            
            header('Location:ind.php');
         }
         public function updatetudiant()
         {
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $id=$_POST['id'];
            
            $req=$this->cnx->prepare('UPDATE students SET firstname=:firstname , lastname=:lastname , email=:email , phone=:phone WHERE id=:id');
            
            $req->bindParam(':firstname',$firstname);
            $req->bindParam(':lastname',$lastname);
            $req->bindParam(':email',$email);
            $req->bindParam(':phone',$phone);
            $req->bindParam(':id',$id);
            $req->execute();
            header('Location:ind.php');
         }
         public function deletetudiant()
         {
            $req=$this->cnx->prepare("DELETE FROM students where id=:id");
            $req->bindParam(':id',$_GET['id']);
            $req->execute();
            header('Location:ind.php');
         }
    }
?>