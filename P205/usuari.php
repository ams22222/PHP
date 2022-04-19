<?php
    
    class USUARI{
            
        private $username = 'usuari no identificat';
        private $name = 'undefined';
        private $lastnames = 'undefined';
        private $mail = 'undefined';
        private $paginesVisitades=[];

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

        public function imprimir(){
           echo '<table class="table">
    <thead>
        <tr>
        <th scope="col">Usuari</th>
        <th scope="col">Nom</th>
        <th scope="col">Cognoms</th>
        <th scope="col">Mail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">' . $this->getUsername() .'</th>
        <td>'.$this->getName().'</td>
        <td>'.$this->getLastnames().'</td>
        <td>'.$this->getMail().'</td>
        </tr>
        

    </tbody>
    </table>';
        }

        public function afegirPaginaArr($title){
            array_push($this->paginesVisitades, $title);
        }

        public function retornarPag(){
            return $this->paginesVisitades;
        }
    }

    

?>