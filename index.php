<?php
class Student {

    public function  __construct (
        public string $name,
        public int $groupId,
        public string $type
    )
    {

    }
}

$student = new Student ('Oleksii', 15, 'PHP');

