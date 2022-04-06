<?php
    
    class USUARI{
            
        private $username = 'usuari no identificat';
        private $name = 'undefined';
        private $lastnames = 'undefined';
        private $mail = 'undefined';
        private $paginesVisitades;

        public function _construct($username, $name, $lastnames, $mail){
            $this->username = $username;
            $this->name = $name;
            $this->lastnames = $lastnames;
            $this->mail = $mail;
        }

        public function setUsername($username){
            $this->username=$username;
        }
        public function getUsername(){
            return $this->username;
        }

        
        public function setName($name){
            $this->name=$name;
        }
        public function getName(){
            return $this->name;
        }

        
        public function setLastnames($lastnames){
            $this->lastnames=$lastnames;
        }
        public function getLastnames(){
            return $this->lastnames;
        }

        
        public function setMail($mail){
            $this->mail=$mail;
        }
        public function getMail(){
            return $this->mail;
        }

        public function afegirPaginaArr(){
            array_push($this->paginesVisitades, $pagina)
        }

        public function retornarPag(){
            return $this->paginesVisitades;
        }
    }

    

?>