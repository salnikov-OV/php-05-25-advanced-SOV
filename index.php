<?php

class Human {

}
class Student extends Human {

    public function  __construct (
        public string $name,
        public int $groupId,
        public string $type
    )
    {

    }
}

$student = new Student ('Oleksii', 15, 'PHP');

