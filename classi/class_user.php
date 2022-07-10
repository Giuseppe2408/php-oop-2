<?php

    class User {
        public $email;
        public $username;
        private $password;
        public $sconto = 0;

        function __construct($_email, $_username, $_password)
        {
            $this->email= $_email;
            $this->username = $_username;
            $this->password = $_password;
        }
    }

    class Registered_User extends User {
        public $registered;


        public function setsconto(){
            if ($this->registered = true) {
                $this->sconto = 20;
            }
        }

        public function getsconto(){
            return $this->sconto;
        }
    }



    $email = new User('ciao@gmail.com', 'ciao10', 'cio');


    