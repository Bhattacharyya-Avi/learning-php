<?php
    class User{
        public $name;
        protected $email='ab@gmail.com';
        private $password ='12345' ; //can't use outside of the class and class object can't use them. 

        public function setName($name){
            $this->name = $name;
        }

        public function setEmail($email){
            $this->email = $email;
        }
    }

    class Admin extends User{
        public function __construct()
        {
            echo $this->email;
        }
    }

    $admin = new Admin;
    // echo $admin->email;

    // $user = new User();
    // $user->setName('Avindra');
    // $user->setEmail('ab@gmail.com');
    // echo $user->name;
    


    // need to view and understand again...
?>
