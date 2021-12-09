<?php
    class Student{
        public $name;
        public $attendence;
        public $mark;

        public function StudentDetails($name, $attendence, $mark){
            $this->name = $name;
            $this->attendence = $attendence;
            $this->mark = $mark;
        }
    }

    $class12 = new Student();
    $class12->StudentDetails('Avindra',true,90);
    echo $class12->name;
    echo $class12->attendence;
    echo $class12->mark;

?>