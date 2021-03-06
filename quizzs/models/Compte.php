<?php

 class Compte {
  //Attributs
       public $id;
       public $login;
       public $password;
       public $profil;
       public  $fullName;

   //Methodes Concretes d'instances
        //Constructeur
        public function __construct($rowBd=null){
            //Hydratation de l'objet compte à partir 
            //d'un tuple de la table compte
          if($rowBd!=null){
              $this->id=$rowBd['id'];
              $this->login=$rowBd['login'];
              $this->password=$rowBd['password'];
              $this->profil=$rowBd['profil'];
              $this->fullName=$rowBd['fullName'];
          }
           
        }

      public function getProfil(){
          return $this->profil;
      }  

}